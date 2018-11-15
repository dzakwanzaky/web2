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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/halamandua', function () {
    return view('halamandua');
});
Route::get('/halamantiga', function () {
    return view('halamantiga');
});
Route::resource('halaman', 'zack');
Route::get('zack/create', 'zack@create');

Route::get('/mhs', function () {
    return view('mhs');
});
Route::get('/file_create', function () {
    return view('file_create');
});

Route::resource('karyawan','karyawan');

Route::resource('user','tests');

Route::resource('mahasiswa','Mahasiswa');

Route::resource('file','File');


