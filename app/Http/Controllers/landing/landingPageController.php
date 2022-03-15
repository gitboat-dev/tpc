<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Func_controller;

class landingPageController extends Controller {
    public function index(){
        $chkie = new Func_controller;
        $data = [
            'chkie' => $chkie->chk(),
            'title' => '',
            'des' => '',
            'key' => '',
        ];
    }
}
