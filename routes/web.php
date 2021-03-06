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
    return view('tugas4');
});
Route::get('praktikum2', function () {
    return view('praktikum2');
});
Route::get('ETS', 'viewController@showETS');
Route::get('masker/index', 'viewController@showpraktikum3');
Route::get('tugasPHP', 'viewController@showtugasPHP');
Route::post('fungsiPHP', 'viewController@showfungsiPHP');

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/view/{id}','PegawaiController@detail');
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD masker
Route::get('/masker','MaskerController@index');
Route::get('/masker/tambah','MaskerController@tambah');
Route::post('/masker/store','MaskerController@store');
Route::get('/masker/edit/{id}','MaskerController@edit');
Route::post('/masker/update','MaskerController@update');
Route::get('/masker/hapus/{id}','MaskerController@hapus');
Route::get('/masker/view/{id}','MaskerController@detail');
Route::get('/masker/cari','MaskerController@cari');

//route CRUD karyawan1
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}','Karyawan1Controller@detail');
