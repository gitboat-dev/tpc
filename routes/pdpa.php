<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Func_controller;
use Jenssegers\Agent\Agent;

Route::group(['namespace' => 'pdpa','prefix' => 'pdpa'], function () {
    Route::get('/', 'CookieController@check');
	Route::get('{event}', 'CookieController@event');
});
Route::get('/privacy-policy', function(){
    $chkie = new Func_controller;
    $data['chkie'] = $chkie->chk();
    $agent = new Agent();
    $data['des'] = 'Thai Polyester Company Limited and Personal Data Protection Policy';
    $data['key'] = '';
    $data['title'] = 'Privacy Policy | Thai Polyester CO., LTD';
    $data['active_home'] = 'activemenu';
    $data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
    return view('layouts.pdpa.privacy-policy',$data);
});

