<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'landing'], function () {
    Route::get('/landing', 'landingPageController@page1');
});
