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
Route::get('/laporan','LaporanController@all')->name('semua.laporan');
Route::get('/laporan/{id}','LaporanController@isi')->name('isi.laporan');
Route::post('/cari','LaporanController@cari')->name('cari.laporan');
Route::get('/kategori/{id}','LaporanController@kategori')->name('kategori.laporan');
Route::post('/tambah-komentar','KomentarController@tambah')->middleware('auth')->name('tambah.komentar');


Route::prefix('user')->group(function(){
	Auth::routes();
	Route::get('/komentar','UserController@komentarmember')->name('komentar.member');
	Route::get('/','UserController@index')->name('user.dashboard');
	Route::get('/profile','UserController@profile')->name('user.lihat-profile');
	Route::get('/edit-profile','UserController@editprofile')->name('user.edit-profile');
	Route::post('/update-profile','UserController@updateprofile')->name('user.update-profile');
	Route::get('/tambah-laporan','LaporanController@index')->middleware('auth')->name('tambah.laporan');
	Route::post('/postreports','LaporanController@post')->middleware('auth')->name('post.report');
	Route::get('/edit-laporan/{id}','LaporanController@edit')->middleware('auth')->name('edit.laporan');
	Route::post('/update','LaporanController@update')->middleware('auth')->name('update.laporan');
	Route::get('/notofikasi','UserController@notifikasi')->name('notifikasi.member');
	Route::get('/delete/{ide}','LaporanController@delete')->middleware('auth')->name('delete.report');
	Route::get('/delete/komentar/{ide}','LaporanController@hapuslaporan')->middleware('auth')->name('delete.komentar');
});


Route::prefix('admin')->group(function(){
	Route::get('', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	
});
