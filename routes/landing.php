<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'landing'], function () {
    Route::get('/High-Quality-Polyester-Yarn-and-Fiber', 'landingPageController@page1');
    Route::get('/landing/thank-you', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you2', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you3', 'landingPageController@thank_you1');
    Route::get('/en/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample', 'landingPageController@page2');
    Route::get('/th/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample', 'landingPageController@page3');
});
