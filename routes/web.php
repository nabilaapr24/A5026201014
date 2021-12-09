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

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route cari pegawai
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD
Route::get('/mutasi','MutasiController@index');

//route CRUD mutasi
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD laptop
Route::get('/laptop','LaptopController@indexlaptop');

Route::get('/laptop/tambah','LaptopController@tambah');
Route::post('/laptop/store','LaptopController@store');
Route::get('/laptop/edit/{id}','LaptopController@edit');
Route::post('/laptop/update','LaptopController@update');
Route::get('/laptop/hapus/{id}','LaptopController@hapus');
Route::get('/laptop/view/{id}','LaptopController@detail');