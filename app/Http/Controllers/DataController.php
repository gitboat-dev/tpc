<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Jenssegers\Agent\Agent;

class DataController{
    static function data(){
      
        $lang = DataController::lang();
       
        return array(
                    'domain' => env('APP_URL'),
                    'lang' => $lang,
        		);
    }

   
    static function lang(){
        $lang = app()->getLocale();
        if($lang){
            $arr = array("th", "en");
            if(in_array(trim($lang), $arr)){
                return $lang;
            }
        }

        return 'th';
    }

}
