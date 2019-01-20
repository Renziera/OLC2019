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

Route::view('/jadwal', 'jadwal');

Route::view('/daftar', 'daftar');

Route::view('/pembayaran', 'cekpembayaran');

Route::post('/daftar', 'DaftarController@daftar');

Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@index')->name('admin');
