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
    public function page2(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Polyester Yarn Spun Filament Fiber | Thailand Manufacturers Suppliers | FREE Sample",
            'des' => "Professional suppliers with 80 years of experience. Using German machines, specializing in 100% Polyester Yarn, Spun, Filament, Fiber.",
            'key' => "100% Polyester Yarn, Spun, Filament, Fiber",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
            'd_lang' => 'EN',
            'lang' => 'TH',
            'lang_url' => '/th/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample',
        ];
        return view('landing.FinalLanding.Final',$data);
    }
    public function page3(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Polyester Yarn Spun Filament Fiber | Thailand Manufacturers Suppliers | FREE Sample",
            'des' => "Professional suppliers with 80 years of experience. Using German machines, specializing in 100% Polyester Yarn, Spun, Filament, Fiber.",
            'key' => "100% Polyester Yarn, Spun, Filament, Fiber",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
            'd_lang' => 'TH',
            'lang' => 'EN',
            'lang_url' => '/en/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample',
        ];
        return view('landing.FinalLandingTh.Final',$data);
    }
    public function page4(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Thailand's top Manufacturers | High-Quality Polyester Yarn and Fiber | FREE Sample FREE quote",
            'des' => "Operating with a German system and specializing in Virgin and Recycled Polyester yarn, fiber, and filament. Guaranteed with OEKO-tex and GRS. A vertically integrated polyester fiber supplier.",
            'key' => "Thailand's top Manufacturers, High-Quality Polyester Yarn and Fiber, FREE Sample FREE quote",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page4',$data);
    }
    public function page5(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Landing page v3",
            'des' => "",
            'key' => "",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page5',$data);
    }
    public function page6(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Landing page v3",
            'des' => "",
            'key' => "",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page6',$data);
    }
    public function page7(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Polyester Yarn Spun Filament Fiber | Thailand Manufacturers Suppliers | FREE Sample",
            'des' => "Professional suppliers with 80 years of experience. Using German machines, specializing in 100% Polyester Yarn, Spun, Filament, Fiber.",
            'key' => "100% Polyester Yarn, Spun, Filament, Fiber",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page7',$data);
    }
    public function page8(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Thailand's top Manufacturers | High-Quality Polyester Yarn and Fiber | FREE Sample FREE quote",
            'des' => "Operating with a German system and specializing in Virgin and Recycled Polyester yarn, fiber, and filament. Guaranteed with OEKO-tex and GRS. A vertically integrated polyester fiber supplier.",
            'key' => "Thailand's top Manufacturers, High-Quality Polyester Yarn and Fiber, FREE Sample FREE quote",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.page.page8',$data);
    }

    public function thank_you1(){
        $chkie = new Func_controller;
        $agent = new Agent();
        $data = [
            'chkie' => $chkie->chk(),
            'title' => "Thank you!",
            'des' => "Your submission has been received.",
            'key' => "High-Quality Polyester Yarn and Fiber,Competitive price,Get FREE Sample",
            'chkmo' => $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false),
        ];
        return view('landing.thank-you.thank1',$data);
    }
}
