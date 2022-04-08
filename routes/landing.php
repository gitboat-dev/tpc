<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'landing'], function () {
    Route::get('/High-Quality-Polyester-Yarn-and-Fiber', 'landingPageController@page1');
    Route::get('/landing/thank-you', 'landingPageController@thank_you1');
    Route::get('/en/final', 'landingPageController@page2');
    Route::get('/th/final', 'landingPageController@page3');
});
