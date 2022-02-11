<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'backend', 'prefix' => 'backoffice'], function () {
	Route::get('/', 'Auth\LoginAdminController@index')->name('backoffice.form');

	/*-----------------------------------End Route Get-----------------------------------*/

	Route::post('/login', 'Auth\LoginAdminController@login')->name('backoffice.login');
	Route::post('/logout', 'Auth\LoginAdminController@logout')->name('backoffice.logout');

	/*-----------------------------------End Route Post-----------------------------------*/

	Route::group(['middleware' => 'admin'], function () {
		Route::get('/dashboard', 'dashboard\dashboardController@index')->name('backoffice.dashboard');
		Route::get('/blog', 'blog\blogController@index')->name('backoffice.blog');
		Route::get('/blog/edit/{id}', 'blog\blogController@edit')->where(['id' => '[0-9]+'])->name('backoffice.blog.edit');

		/*-----------------------------------End Route Get-----------------------------------*/

		Route::post('/blog/datatables', 'blog\blogController@blog_tb');
		Route::post('/blog/create', 'blog\blogController@create');
		Route::post('/blog/save', 'blog\blogController@save');
		Route::post('/blog/delete', 'blog\blogController@delete');
		Route::post('/blog/active', 'blog\blogController@active');
		Route::post('/blog/banner/upload', 'blog\blogController@banner_upload');
		Route::post('/blog/banner/delete', 'blog\blogController@banner_delete');
		Route::post('/blog/banner/sort', 'blog\blogController@banner_sort');
		Route::post('/blog/cover/upload', 'blog\blogController@cover_upload');
		Route::post('/blog/cover/delete', 'blog\blogController@cover_delete');
		Route::post('/blog/gallery/upload', 'blog\blogController@gallery_upload');
		Route::post('/blog/gallery/show', 'blog\blogController@gallery_show');
		Route::post('/blog/gallery/delete', 'blog\blogController@gallery_delete');

		/*-----------------------------------End Route Post-----------------------------------*/
	});
});