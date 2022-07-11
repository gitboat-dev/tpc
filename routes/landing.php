<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'landing'], function () {
    Route::get('/High-Quality-Polyester-Yarn-and-Fiber', 'landingPageController@page1');
    Route::get('/en/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample', 'landingPageController@page2');
    Route::get('/th/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample', 'landingPageController@page3');
    Route::get('/high-quality-polyester-suppliers', 'landingPageController@page4');
    Route::get('/en/v3', 'landingPageController@page5');
    Route::get('/th/v3', 'landingPageController@page6');
    Route::get('/polyester-yarn-spun-filament-fiber-thailand-manufacturers-suppliers-free-sample', 'landingPageController@page7');
    Route::get('/landing4', 'landingPageController@page8');

    /* end landing page */

    Route::get('/landing/thank-you', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you2', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you3', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you4', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you5', 'landingPageController@thank_you1');
    Route::get('/landing/thank-you6', 'landingPageController@thank_you1');

    /* end thank you */
});
