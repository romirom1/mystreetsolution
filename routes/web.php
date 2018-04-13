<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','BerandaController@index')->name('beranda');
Route::get('/panduan','BerandaController@panduan')->name('panduan');
Route::get('/tentang','BerandaController@tentang')->name('tentang');
Route::get('/kontak','BerandaController@kontak')->name('kontak');

Route::prefix('user')->group(function(){
	Auth::routes();
	Route::get('/','UserController@index')->name('user.dashboard');
});


Route::prefix('admin')->group(function(){
	Route::get('', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	
});
