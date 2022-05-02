<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'frontend\cache_clear', 'prefix' => 'cache'], function () {
	Route::get('/clear', 'cacheClearController@cache_clear');
});
