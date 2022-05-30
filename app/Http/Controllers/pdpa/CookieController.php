<?php

namespace App\Http\Controllers\pdpa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Func;

use Cookie;
use DB;

use Throwable;
use Validator;
use Carbon\Carbon;

use App\Models\pdpa\pdpa_cookie;
use App\Models\pdpa\pdpa_logs;
use Jenssegers\Agent\Agent;

class CookieController extends Controller
{
    public $cookieName = 'pdpa';
    public function check($getArr=0){
        $agent = Func::getAgent();
        if($agent['device'] != 'Robot'){
            $res['status'] = 0;
            $res['message'] = 'มีอะไรผิดพลาดบางอย่าง';
            try {
                $clear = 0;
                if(Cookie::has($this->cookieName)) {
                    $pdpa['cookie'] = Cookie::get($this->cookieName);
                    $validator = Validator::make($pdpa, [
                        'cookie' => 'required|regex:/^([a-zA-Z0-9]{32})$/i',
                    ]);
                    if($validator->fails()){
                        $clear=1;
                        $res['message'] = $validator->errors()->first();

                    }else{
                        $row = pdpa_cookie::where('code',$pdpa['cookie'])
                                    ->where('active',1)
                                    ->first();
                        if($row){
                            $expire = Carbon::createFromDate($row->expire);
                            $n = now()->diffInMinutes($expire, false);
                            if($n>=0){
                                $res['status'] = 1;
                                $res['message'] = 'ยังเหลือเวลาอีก '.$n.' นาที';
                                $res['row'] = $row;
                            }else{
                                $row->active = null;
                                $row->event = 'expire';
                                if($row->save()){
                                    $log = new pdpa_logs;
                                    $log->pdpa = $row->id;
                                    $log->ip = request()->header('x-real-ip');
                                    $log->session_id = session()->getId();
                                    $log->device = $agent['device'];
                                    $log->browser = $agent['browser'];
                                    $log->system = $agent['system'];
                                    $log->created_at = now();
                                    $log->remark = 'expired';
                                    if($log->save()){
                                        $res['message'] = 'หมดอายุแล้ว';
                                    }
                                }
                                $clear=1;
                            }
                        }else{
                            $clear=1;
                            $res['message'] = 'ไม่พบข้อมูลข้อมูล';
                        }
                    }
                }else{
                    $res['message'] = 'ไม่พบข้อมูล Cookie';
                }
            } catch (Throwable $e) {
                $res['message'] = $e->getMessage();
            }
            if($getArr==1){
                return $res;
            }else{
                $resTo = response()->json($res);
                if($clear==1){
                    $resTo->withCookie($this->cookieRm());
                }
                return $resTo;
            }
        }
        return 0;
    }
    public function create($event){
        if(in_array($event, ['accept','decline'])){
            $agent = Func::getAgent();
            if($agent['device'] != 'Robot'){
                $res['status'] = 0;
                $res['message'] = 'มีอะไรผิดพลาดบางอย่าง';
                try {
                    /*1 day = 1,440 min, 90 day = 129,600 min*/
                    $setDay = config('setting.pdpa.cookie.time');
                    $seTime = ($setDay>0) ? $setDay*1440 : 129600;
                    $now = now();
                    $expire = date('Y-m-d 23:59:00', strtotime('+'.$setDay.' day', strtotime($now)));
                    $random = Func::randomString(10);
                    $domain = request()->header('host');
                    $ip = request()->header('x-real-ip');
                    $referer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : null;
                    $code = md5($this->cookieName.$domain.$random);
                    $chkRow = pdpa_cookie::where('code',$code)
                                ->where('active',1)
                                ->first();
                    if($chkRow){
                        $res['status'] = 1;
                        $res['message'] = 'มีอยู่แล้วในระบบ';
                    }else{
                        $row = new pdpa_cookie;
                        $row->name = $this->cookieName;
                        $row->active = 1;
                        $row->event = $event;
                        $row->code = $code;
                        $row->random = $random;
                        $row->created_at = $now;
                        $row->expire = $expire;
                        $row->domain = $domain;
                        if($row->save()){
                            $log = new pdpa_logs;
                            $log->pdpa = $row->id;
                            $log->ip = $ip;
                            $log->session_id = session()->getId();
                            $log->device = $agent['device'];
                            $log->browser = $agent['browser'];
                            $log->system = $agent['system'];
                            $log->created_at = $now;
                            $log->remark = $event;
                            $log->referer = $referer;
                            if($log->save()){
                                $res['status'] = 1;
                                $res['message'] = 'บันทึกเรียบร้อยแล้ว';
                                $res['expire'] = $row->expire;
                                $cookie = Cookie::make($this->cookieName, $code, $seTime);
                                return response()->json($res)->withCookie($cookie);
                            }
                        }
                    }
                } catch (Throwable $e) {
                    $res['message'] = $e->getMessage();
                }
                return response()->json($res);
            }
        }
    }
    public function event($str){
        $cookie = $this->check(1);
        $state = [
            'status' => $cookie['status'],
            'message' => $cookie['message'],
            'expire' => (isset($cookie['row'])) ? $cookie['row']['expire'] : null,
        ];
        if(strcmp($str,'accept') === 0 || strcmp($str,'decline') === 0){
            if($cookie['status'] == 0){
                return $this->create($str);
            }else{
                return $state;
            }
        }elseif(strcmp($str,'delete') === 0){
            return $this->delete($cookie);
        }
        abort(404);
    }
    public function delete($cookie){
        $agent = Func::getAgent();
        if($agent['device'] != 'Robot' && isset($cookie['row']['id'])){
            $row = pdpa_cookie::find($cookie['row']['id']);
            if($row){
                $row->active = null;
                $row->event = 'delete';
                if($row->save()){
                    /* create log */
                    $log = new pdpa_logs;
                    $log->pdpa = $row->id;
                    $log->ip = request()->header('x-real-ip');
                    $log->session_id = session()->getId();
                    $log->device = $agent['device'];
                    $log->browser = $agent['browser'];
                    $log->system = $agent['system'];
                    $log->created_at = now();
                    $log->remark = 'delete';
                    $log->save();
                    /* delete row */
                    $row->delete();
                    return response()->json([
                        'status' => 1,
                        'message' => 'ลบข้อมูลเรียบร้อยแล้ว'
                    ])->withCookie($this->cookieRm());
                }
            }
        }
        return $this->check();
    }
    public function cookieRm(){
        return Cookie::forget('pdpa'); /* soft delete */
    }
}
