<?php
namespace App\Http\Controllers;
use Func;
use Jenssegers\Agent\Agent;

class Func_controller{
    static function chk(){

        $agent = new Agent();

    	
    	if ($agent->isIE()===TRUE) {
    		$browser = $agent->browser();
    		if($agent->version($browser)>8){
    			return 1;

    		}else{
    			return 0;
    		}
    	}
	    
	    return 1;
    }
   
}
