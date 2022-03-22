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
            'title' => "High-Quality Polyester Yarn and Fiber | Competitive price | Get FREE Sample",
            'des' => "Thailand's textile industry leader and a vertically integrated polyester fiber manufacturer. Using German high-tech machines, contemporary invention and specializing in polyester yarn, fiber, and filament.",
            'key' => "High-Quality Polyester Yarn and Fiber,Competitive price,Get FREE Sample",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page1',$data);
    }
    public function thank_you1(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "High-Quality Polyester Yarn and Fiber | Competitive price | Get FREE Sample",
            'des' => "Thailand's textile industry leader and a vertically integrated polyester fiber manufacturer. Using German high-tech machines, contemporary invention and specializing in polyester yarn, fiber, and filament.",
            'key' => "High-Quality Polyester Yarn and Fiber,Competitive price,Get FREE Sample",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.thank-you.thank1',$data);
    }
}
