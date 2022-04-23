<?php

use Illuminate\Support\Facades\Route;

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
// obat
Route::get('/','Controller@index');
Route::get('/obat','ObatController@index');
Route::get('/obat/create','ObatController@createform');
Route::post('/obat/create','ObatController@create')->name('create');
Route::get('/obat/update/{id}','ObatController@updateform')->name('updateform');
Route::post('/obat/update','ObatController@update')->name('update');
Route::get('/obat/destroy/{id}','ObatController@destroy')->name('delete');

// transaksi
Route::get('/transaksi','TransaksiController@index');
Route::get('/obat/transaksi/{id}','TransaksiController@createform')->name('transaksi');
Route::get('/transaksi/destroy/{id}', 'TransaksiController@destroy')->name('destroy');
Route::post('/transaksi/create','TransaksiController@create')->name('createtransaksi');
Route::get('/transaksi/cetak/{id}', 'TransaksiController@cetak_pdf')->name('cetak');

// API
Route::post('/transaksi/post','TransaksiController@post')->name('posttransaksi');
Route::post('/transaksi/laporan', 'TransaksiController@laporan')->name('laporan');
Route::post('/obat/stock', 'ObatController@stock')->name('stock');

Route::get('/distributor', 'DistributorController@index');
Route::get('/distributor/create','DistributorController@createform');