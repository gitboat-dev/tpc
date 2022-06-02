<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'pdpa','prefix' => 'pdpa'], function () {
    Route::get('/', 'CookieController@check');
	Route::get('{event}', 'CookieController@event');
});
Route::get('/privacy-policy', function(){
    return view('layouts.pdpa.privacy-policy');
});
