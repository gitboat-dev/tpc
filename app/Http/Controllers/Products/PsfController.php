<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Func_controller;

class PsfController extends Controller
{
    public function index(){
        $chkie = new Func_controller;
        $data = [
            'chkie' => $chkie->chk(),
            'title' => 'PSF (Polyester Staple Fiber) | Thai Polyester CO., LTD',
            'des' => 'Polyester staple fiber is a material produced from synthetic chemical compounds with a variety of uses in the textile, automotive and furniture industries',
            'key' => 'Polyester Staple Fiber, PSF, Standard Polyester Staple Fiber, Best Standard Polyester Staple Fiber, Produce cheap Polyester Staple Fiber',
            'active_product' => 'activemenu',
        ];

        return view('products.psf',$data);
    }
}
