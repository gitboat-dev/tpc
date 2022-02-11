<?php
namespace App\Http\Controllers;
use Func;

class AjaxEncode{
    public function getEncode(){
            $default = 'q:p';
            $str = config('setting')['ajax-encode'];
            if($str){
                return bin2hex(config('setting')['ajax-encode']);
            }else{
                return $default;
            }
    }
}
