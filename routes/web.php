<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengelolaController;
use App\Http\Controllers\Admin\DesaWisataController;
use App\Http\Controllers\Admin\AtraksiWisataController;
use App\Http\Controllers\Admin\KalenderWisataController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DetailController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use App\Http\Controllers\Web\WebAtraksiWisataController;
use App\Http\Controllers\Web\WebFasilitasController;
use App\Http\Controllers\Admin\GaleriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::resource('/', AdminController::class);

    Route::resource('pengelola', PengelolaController::class);

    Route::resource('desa-wisata', DesaWisataController::class);



    Route::resource('atraksi-wisata', AtraksiWisataController::class);
    Route::get('atraksi-wisata/show-atraksi-wisata/{atraksi_wisata}', [AtraksiWisataController::class, 'detail']);

    Route::resource('kalender-wisata', KalenderWisataController::class);

    Route::resource('kontak', KontakController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('detail', DetailController::class);

});
Route::post('store-galeri', [DesaWisataController::class, 'storeGaleri']);
Route::get('delete-galeri/{galeri}', [DesaWisataController::class, 'deleteGaleri']);

Route::post('store-bulan', [KalenderWisataController::class, 'storeBulan']);


 Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::resource('/', WebDesaWisataController::class);
Route::resource('desawisata', WebDesaWisataController::class);
Route::resource('kontakwisata', WebKontakWisataController::class);
Route::resource('kalenderwisata', WebKalenderWisataController::class);
Route::resource('petawisata', WebPetaWisataController::class);
Route::resource('atraksiwisata',WebAtraksiWisataController::class);
Route::resource('fasilitaswisata', WebFasilitasController::class);

Route::get('atraksi-wisata/{kategori}',[WebAtraksiWisataController::class,'index']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

