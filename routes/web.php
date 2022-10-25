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
    return view('front.home');
});
Route::view('/dijual','front.dijual');
Route::view('/disewakan','front.disewakan');
Route::view('/about','front.about');
Route::view('/register','front.register');
Route::view('/berita','front.berita');
Route::view('/login','front.login');
Route::view('/lupapassword','front.lupapassword');
Route::view('/layanan','front.layanan');
Route::view('/kontak','front.kontak');

Route::view('/propertibaru','front.propertibaru');
Route::view('/detail','front.detail');
Route::view('/disewadetail','front.disewadetail');
Route::view('/propertidetail','front.propertidetail');
Route::view('/keuntunganagen','front.keuntunganagen');
Route::view('/terms','front.terms');
Route::view('/privacy','front.privacy');
Route::view('/karir','front.karir');