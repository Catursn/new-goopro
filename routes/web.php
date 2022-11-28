<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DijualController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\KategoriPropertiController;
use App\Http\Controllers\KategoriKotaController;
use App\Http\Controllers\KategoriKecamatanController;
use App\Http\Controllers\KategoriProvinsiController;
use App\Http\Controllers\KategoriHunianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\KeuntunganController;
use App\Http\Controllers\HakCiptaController;
use App\Http\Controllers\CaraKerjaController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DependantDropdownController;


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
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('loginstore', [AuthController::class, 'loginSubmit'])->name('loginstore');
    Route::get('/admin/register', [AuthController::class, 'register'])->name('register');
    Route::post('/admin/regstore', [AuthController::class, 'registerSubmit'])->name('regstore');
Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){
    Route::view('/','back.dashboard')->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/gantipassword', [AuthController::class, 'gantipassword'])->name('gantipassword');
    Route::post('/{id}/resetpassword', [AuthController::class, 'resetpassword'])->name('resetpassword');
    Route::resource('/berita', BeritaController::class);
    Route::get('/ambil/kota/{id}',[PropertiController::class, 'kota'])->name('kota');
    Route::get('/ambil/kecamatan/{id}',[PropertiController::class, 'kecamatan'])->name('kecamatan');
    Route::get('/properti/terjual',[PropertiController::class, 'terjual'])->name('terjual');
    Route::get('/properti/nonaktif',[PropertiController::class, 'nonaktif'])->name('nonaktif');
    Route::get('/properti/terjual/{id}',[PropertiController::class, 'subterjual'])->name('subterjual');
    Route::resource('/properti', PropertiController::class);
    Route::resource('/kategoriberita', KategoriBeritaController::class);
    Route::resource('/kategoriproperti', KategoriPropertiController::class);
    Route::resource('/kategorikota', KategoriKotaController::class);
    Route::resource('/kategoriprovinsi', KategoriProvinsiController::class);
    Route::resource('/kategorikecamatan', KategoriKecamatanController::class);
    Route::resource('/kategorihunian', KategoriHunianController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/terms', TermsController::class);
    Route::resource('/privacy', PrivacyController::class);
    Route::resource('/syarat', SyaratController::class);
    Route::resource('/keuntungan', KeuntunganController::class);
    Route::resource('/hakcipta', HakCiptaController::class);
    Route::resource('/carakerja', CaraKerjaController::class);
    Route::resource('/testimoni', TestimoniController::class);
    Route::resource('/iklan', IklanController::class);
    Route::resource('/pesan', PesanController::class);
    Route::resource('/profile', ProfileController::class);
});


Route::get('/register', [AuthController::class, 'frontregister'])->name('frontregister');
Route::post('/regstore', [AuthController::class, 'frontregisterSubmit'])->name('frontregstore');
Route::view('/lupapassword','front.lupapassword');
Route::post('/resetpassword', [AuthController::class, 'resetmail'])->name('resetmail');
Route::get('/password/{token}', [AuthController::class, 'reset'])->name('reset');
Route::post('/resetsubmit', [AuthController::class, 'resetsubmit'])->name('resetsubmit');
// Route::resource('dijual', DijualController::class);
Route::get('/berita/{judul}', [HomeController::class, 'berita']);
Route::get('/dijual/{hunian}', [HomeController::class, 'dijual'])->name('dijual');
Route::get('/disewakan/{hunian}', [HomeController::class, 'disewakan'])->name('disewakan');
Route::get('/propertibaru/{hunian}', [HomeController::class, 'properti'])->name('propertibaru');
Route::get('/properti/detail/{slug}', [HomeController::class, 'detail']);
Route::get('/properti/list/{list}', [HomeController::class, 'list']);
Route::post('/properti/cari', [HomeController::class, 'cari']);
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/syarat', [HomeController::class, 'syarat'])->name('syarat');
Route::get('/keuntungan', [HomeController::class, 'keuntungan'])->name('keuntungan');
Route::get('/hakcipta', [HomeController::class, 'hakcipta'])->name('hakcipta');
Route::get('/carakerja', [HomeController::class, 'carakerja'])->name('carakerja');
Route::post('/postkontak', [HomeController::class, 'postkontak'])->name('postkontak');
// Route::view('/disewakan','front.disewakan');
Route::view('/about','front.about');
// Route::view('/register','front.register');
// Route::view('/berita','front.berita');
// Route::view('/login','front.login');
Route::view('/layanan','front.layanan');
Route::view('/kontak','front.kontak')->name('kontak');

// Route::view('/propertibaru','front.propertibaru');
// Route::view('/detail','front.detail');
Route::view('/disewadetail','front.disewadetail');
Route::view('/propertidetail','front.propertidetail');
// Route::view('/keuntunganagen','front.keuntunganagen');
// Route::view('/terms','front.terms');
// Route::view('/privacy','front.privacy');
Route::view('/karir','front.karir');
