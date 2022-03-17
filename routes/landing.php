<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'landing'], function () {
    Route::get('/High-Quality-Polyester-Yarn-and-Fiber', 'landingPageController@page1');
});
