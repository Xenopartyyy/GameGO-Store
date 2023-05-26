<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\GruppenggunaController;
use App\Http\Controllers\SliderController;



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


Route::get('/create', [CRUDController::class, 'create']);
Route::get('/read', [CRUDController::class, 'readUser']);
Route::get('/update', [CRUDController::class, 'update']);
Route::get('/detail', [CRUDController::class, 'detail']);
Route::get('/',[MainController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::prefix('produk')->group(function () {
    Route::get('/', [ProdukController::class, 'index']);
    Route::get('/create', [ProdukController::class, 'create']);
    Route::post('/store', [ProdukController::class, 'store']);
    Route::get('/{id}/edit', [ProdukController::class, 'edit']);
    Route::put('/{id}', [ProdukController::class, 'update']);
    Route::delete('/{id}', [ProdukController::class, 'destroy']);
});

Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/store', [KategoriController::class, 'store']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::prefix('pengguna')->group(function () {
    Route::get('/', [PenggunaController::class, 'index']);
    Route::get('/create', [PenggunaController::class, 'create']);
    Route::post('/store', [PenggunaController::class, 'store']);
    Route::get('/{id}/edit', [PenggunaController::class, 'edit']);
    Route::put('/{id}', [PenggunaController::class, 'update']);
    Route::delete('/{id}', [PenggunaController::class, 'destroy']);
});

Route::prefix('gruppengguna')->group(function () {
    Route::get('/', [GruppenggunaController::class, 'index']);
    Route::get('/create', [GruppenggunaController::class, 'create']);
    Route::post('/store', [GruppenggunaController::class, 'store']);
    Route::get('/{id}/edit', [GruppenggunaController::class, 'edit']);
    Route::put('/{id}', [GruppenggunaController::class, 'update']);
    Route::delete('/{id}', [GruppenggunaController::class, 'destroy']);
});

Route::prefix('slider')->group(function () {
    Route::get('/', [SliderController::class, 'index']);
    Route::get('/create', [SliderController::class, 'create']);
    Route::post('/store', [SliderController::class, 'store']);
    Route::get('/{id}/edit', [SliderController::class, 'edit']);
    Route::put('/{id}', [SliderController::class, 'update']);
    Route::delete('/{id}', [SliderController::class, 'destroy']);

});

