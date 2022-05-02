<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'cache_clear', 'prefix' => 'cache'], function () {
	Route::get('/clear', 'cacheClearController@cache_clear');
});
