<?php
use Jenssegers\Agent\Agent;
if(!function_exists('hello')) {
  function hello() {
    return trans('message.welcome') ;
  }
}


function getHello($name=''){
return 'Hello ! '.$name;
}