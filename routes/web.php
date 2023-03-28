<?php

use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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


Route::get('about', function () {
    return view('about');
});

Route::resource('desawisata',WebDesaWisataController::class);
Route::resource('kontakwisata',WebKontakWisataController::class);
Route::resource('kalenderwisata',WebKalenderWisataController::class);
Route::resource('petawisata',WebPetaWisataController::class);


Route::resource('admin', AdminController::class);
