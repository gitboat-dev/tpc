<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'pdpa','prefix' => 'pdpa'], function () {
    Route::get('/', 'pdpa\CookieController@check');
	Route::get('{event}', 'pdpa\CookieController@event');
});
