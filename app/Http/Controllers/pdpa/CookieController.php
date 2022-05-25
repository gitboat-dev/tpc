<?php

namespace App\Http\Controllers\pdpa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cookie;
use DB;

use Throwable;
use Validator;
use Carbon\Carbon;

class CookieController extends Controller{
    public $cookieName = 'pdpa';
    public function check(){
        // return "555";
    }
    public function create($event){

    }
}
