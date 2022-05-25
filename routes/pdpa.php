<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'pdpa','prefix' => 'pdpa'], function () {
    Route::get('/', 'CookieController@check');
	Route::get('{event}', 'CookieController@event');
});
