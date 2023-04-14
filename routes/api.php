<?php

use App\Http\Controllers\Api\DesawisataApiController;
use App\Http\Controllers\Api\AtraksiwisataApiController;
use App\Http\Controllers\Api\KalenderwisataApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('desawisata/all', [DesawisataApiController::class,'getAllData']);
Route::get('atraksiwisata/all', [AtraksiwisataApiController::class,'getAllData']);
Route::get('kalenderwisata/all', [KalenderwisataApiController::class,'getAllData']);
