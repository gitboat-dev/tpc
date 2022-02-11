<?php
Route::prefix('test')->group(function () {
    Route::get('/inquiries', 'TestController@inquiries');
});