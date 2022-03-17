<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Func_controller;
use Jenssegers\Agent\Agent;

class landingPageController extends Controller {
    public function page1(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => '',
            'des' => '',
            'key' => '',
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page1',$data);
    }
}
