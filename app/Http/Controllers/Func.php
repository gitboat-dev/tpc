<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Log;
use File;
use App\Http\Controllers\agent\AgentController;

class Func extends Controller{
    static function getAgent($req=[]){
        $agent = new AgentController;
        return $agent->get($req);
    }
    static function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}
