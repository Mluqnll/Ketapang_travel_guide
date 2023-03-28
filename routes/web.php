<?php

use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengelolaController;
use App\Http\Controllers\Admin\DesaWisataController;
use App\Http\Controllers\Admin\AtraksiWisataController;
use App\Http\Controllers\Admin\KalenderWisataController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\AuthController;
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


Route::get('index', function () {
    return view('components/app');
});

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::resource('/', AdminController::class);

    Route::resource('pengelola', PengelolaController::class);

    Route::resource('desa-wisata', DesaWisataController::class);


    Route::resource('atraksi-wisata', AtraksiWisataController::class);

    Route::resource('kalender-wisata', KalenderWisataController::class);

    Route::resource('kontak', KontakController::class);

    Route::resource('kategori', KategoriController::class);
});


Route::resource('desawisata', WebDesaWisataController::class);
Route::resource('kontakwisata', WebKontakWisataController::class);
Route::resource('kalenderwisata', WebKalenderWisataController::class);
Route::resource('petawisata', WebPetaWisataController::class);


Route::resource('admin', AdminController::class);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

