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
Route::get('/', function () {
    return view('beranda');
});

Route::view('/jadwal', 'jadwal')->name('jadwal');
Route::view('/faq', 'faq')->name('faq');
Route::get('/daftar', 'DaftarController@showDaftar')->name('daftar');
Route::post('/daftar', 'DaftarController@daftar');
Route::view('/cek', 'pembayaran')->name('pembayaran');
Route::post('/cek', 'PembayaranController@pembayaran');
Route::put('/cek', 'PembayaranController@uploadBukti');

Route::view('/course/android_apps', 'course_android_apps');
Route::view('/course/cyber_security', 'course_cyber_security');
Route::view('/course/data_science', 'course_data_science');
Route::view('/course/database', 'course_database');
Route::view('/course/web_apps', 'course_web_apps');
Route::view('/course/web_design', 'course_web_design');

//Di bawah sini hanya untuk panitia
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@approvePay');
Route::get('/admin/kelas/{kelas}','AdminController@kelas');

Route::get('/admin/daftar',"AdminController@daftar");
Route::post('/admin/daftar',"AdminController@daftarAdmin");

Route::post('admin/cari/nama',"AdminController@cariNama");
Route::post('admin/cari/kode','AdminController@cariKode');

Route::get('admin/absen/{kelas}','AdminController@absensi');
Route::post('admin/absen','AdminController@absen');

Route::post('admin/absen/nama',"AdminController@cariAbsenNama");
Route::post('admin/absen/kode','AdminController@cariAbsenKode');
