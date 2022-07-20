<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;
use Log;

class func extends Controller {
    public function clearcache(){
        $goto = request()->root().'/cache/clear';
        $response = Curl::to($goto)
            ->returnResponseObject()
            ->get();
        $content = $response->content;
        if($content == 'cleared'){
            $a[] = array(
                'domain' => $goto,
                'cleared' => true,
            );
        }
        Log::debug($a);
        return $a;
    }
}
