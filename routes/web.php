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
Route::get('tugasPHP', 'viewController@showtugasPHP');
Route::post('fungsiPHP', 'viewController@showfungsiPHP');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
