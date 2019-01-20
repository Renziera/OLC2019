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

Route::view('/daftar', 'daftar')->name('daftar');
Route::post('/daftar', 'DaftarController@daftar');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/**
 * Uncomment untuk enable registration sementara
 * yang bisa login hanya admin, jgn sampai di enable pas deploy
 */
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::get('/admin', 'AdminController@index')->name('admin');
