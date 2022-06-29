<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LaporanbController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PagesController@home');

Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');

//Route::get('/user','App\Http\Controllers\UserController@index');

Route::resource('transaksi', 'TransaksiController');
Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
Route::get('transaksi/getAnggota/{id}', 'TransaksiController@getAnggota');
Route::post('/transaksi/update/{id}', 'TransaksiController@update');

Route::get('/laporan','LaporanbController@index');
