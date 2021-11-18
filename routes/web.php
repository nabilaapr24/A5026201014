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

Route::get('tugas4', function () {
    return view('htmltugas4');
});

Route::get('prak2', function () {
    return view('htmlprak2');
});

Route::get('ets',"viewController@showets");

Route::get('tugasphp',"viewController@showphp");
Route::get('hitungphp', "viewController@resultphp");

Route::get('isiannama',"viewController@showForm");
Route::post('greetings', "viewController@resultGreetings");

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');