<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'images', 'prefix' => 'blog'], function () {
	Route::get('/banner/{id}/{name}.{ext}', 'blog\blogImageController@banner')->where(['id' => '[0-9]+', 'ext' => 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|webp|WEBP']);
	Route::get('/cover/{id}/{name}.{ext}', 'blog\blogImageController@cover')->where(['id' => '[0-9]+', 'ext' => 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|webp|WEBP']);
	Route::get('/gallery/{id}/{name}.{ext}', 'blog\blogImageController@gallery')->where(['id' => '[0-9]+', 'ext' => 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|webp|WEBP']);
});