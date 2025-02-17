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

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/donasi/detail', function () {
   return view('detailDonasi');
});

Route::get('/donasi', 'DonasiController@index')->name('donasi')->middleware('user');
Route::get('/kontak', 'KontakController@index')->name('kontak');
Route::get('/visi-misi', 'VisiMisiController@index')->name('donasi');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/kontak/submit', 'KontakController@submit');
