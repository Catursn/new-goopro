<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DijualController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\KategoriPropertiController;
use App\Http\Controllers\KategoriHunianController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/dijual', [DijualController::class, 'index']);
// Route::get('/dijual','DijualController@index');

/* ADMIN */
    Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('/admin/loginstore', [AuthController::class, 'loginSubmit'])->name('loginstore');
    Route::get('/admin/register', [AuthController::class, 'register'])->name('register');
    Route::post('/admin/regstore', [AuthController::class, 'registerSubmit'])->name('regstore');
Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){
    Route::view('/','back.dashboard')->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/gantipassword', [AuthController::class, 'gantipassword'])->name('gantipassword');
    Route::post('/{id}/resetpassword', [AuthController::class, 'resetpassword'])->name('resetpassword');
    Route::resource('/berita', BeritaController::class);
    Route::get('/properti/nonaktif',[PropertiController::class, 'nonaktif'])->name('nonaktif');
    Route::resource('/properti', PropertiController::class);
    Route::resource('/kategoriberita', KategoriBeritaController::class);
    Route::resource('/kategoriproperti', KategoriPropertiController::class);
    Route::resource('/kategorihunian', KategoriHunianController::class);
    Route::resource('/slider', SliderController::class);
});

// Route::resource('dijual', DijualController::class);
Route::get('/berita/{judul}', [HomeController::class, 'berita']);
Route::get('/dijual', [HomeController::class, 'dijual']);
Route::get('/disewakan', [HomeController::class, 'disewakan']);
Route::get('/propertibaru', [HomeController::class, 'properti']);
Route::get('/properti/{slug}', [HomeController::class, 'detail']);
// Route::view('/disewakan','front.disewakan');
Route::view('/about','front.about');
Route::view('/register','front.register');
// Route::view('/berita','front.berita');
Route::view('/login','front.login');
Route::view('/lupapassword','front.lupapassword');
Route::view('/layanan','front.layanan');
Route::view('/kontak','front.kontak');

// Route::view('/propertibaru','front.propertibaru');
// Route::view('/detail','front.detail');
Route::view('/disewadetail','front.disewadetail');
Route::view('/propertidetail','front.propertidetail');
Route::view('/keuntunganagen','front.keuntunganagen');
Route::view('/terms','front.terms');
Route::view('/privacy','front.privacy');
Route::view('/karir','front.karir');
