<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Jenssegers\Agent\Agent;
use App\Models\master_agent\master_platform;
use Log;

class AgentController extends Controller{
    public function platform(){
        $cname = 'master-platform';
        $m = now()->addMinutes(60);
        return cache()->remember($cname, $m, function (){
            $a = array();
            $row = master_platform::all();
            if($row){
                foreach ($row as $k => $rs) {
                   $a[] = array(
                    'os' => trim($rs['os']),
                    'name' => trim($rs['name']),
                    'version' => trim($rs['version']),
                   );
                }
            }
            return $a;
        });
    }
    public function get($req=[]){
        try {
            $agent = new Agent();
            if(!empty($req) && isset($req['agent'])){
                $agent->setUserAgent($req['agent']);
            }
            $browser = $agent->browser();
            $platform = $agent->platform();
            $res['device'] = null;
            $res['browser'] = null;
            $res['system'] = null;
            if($agent->isRobot()){
                $res['device'] = 'Robot';
            }elseif($agent->isMobile()){
                $res['device'] = 'Mobile';
            }elseif($agent->isTablet()){
                $res['device'] = 'Tablet';
            }elseif($agent->isDesktop()){
                $res['device'] = 'Desktop';
            }else{
                $res['device'] = $agent->device();
            }

            if(trim($platform) != ''){
                $version = $agent->version($platform);
                $system = $this->systems($platform,$version);
                if(!$system){
                    $system = $platform.' '.str_replace('_', '.', $version);
                }
                $res['system'] = $system;
            }
            if(trim($browser)!=''){
                $res['browser'] = $browser.' '.$agent->version($browser);
            }
            return $res;
        } catch (\Throwable $e) {
            Log::debug('error exception | AgentController -> get()');
            Log::debug('user agent : '.$_SERVER['HTTP_USER_AGENT']);
            Log::debug('-> error string');
            Log::debug($e->getMessage());
            Log::debug('-> end');
        }
    }
    public function systems($os,$v){
        $name = null;
        $rows = $this->platform();
        if(is_array($rows) && !empty($rows)){
            foreach ($rows as $k => $rs) {
                if($rs['os'] == $os && $rs['version'] == $v){
                    $name = $rs['name'];
                    break;
                }
            }
        }
        return $name;
    }
}
