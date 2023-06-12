<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\GruppenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/dashboard', [DashboardController::class, 'index']) -> middleware('auth');



Route::get('/', [MainController::class, 'index']);
Route::get('/showproduct/{id}', [MainController::class, 'show']) -> middleware('auth');
Route::get('/allproduk', [MainController::class, 'allproduk'])->name('produk.all') -> middleware('auth');
Route::get('/allproduk/filter', [MainController::class, 'allproduk'])->name('produk.filter') -> middleware('auth');





Route::prefix('produk')->group(function () {
    Route::get('/', [ProdukController::class, 'index']) -> middleware('auth') ;
    Route::get('/create', [ProdukController::class, 'create']) -> middleware(['auth', 'mustadminorstaff']);
    Route::post('/store', [ProdukController::class, 'store']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/{id}/edit', [ProdukController::class, 'edit']) -> middleware(['auth', 'mustadminorstaff']);
    Route::put('/{id}', [ProdukController::class, 'update']) -> middleware(['auth', 'mustadminorstaff']);
    Route::delete('/{id}', [ProdukController::class, 'destroy']) -> middleware(['auth', 'mustadmin']);
});

Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/create', [KategoriController::class, 'create']) -> middleware(['auth', 'mustadmin']);
    Route::post('/store', [KategoriController::class, 'store']) -> middleware(['auth', 'mustadmin']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']) -> middleware(['auth', 'mustadmin']);
    Route::put('/{id}', [KategoriController::class, 'update']) -> middleware(['auth', 'mustadmin']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']) -> middleware(['auth', 'mustadmin']);
});

Route::prefix('pengguna')->group(function () {
    Route::get('/', [PenggunaController::class, 'index']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/create', [PenggunaController::class, 'create']) -> middleware(['auth', 'mustadmin']);
    Route::post('/store', [PenggunaController::class, 'store']) -> middleware(['auth', 'mustadmin']);
    Route::get('/{id}/edit', [PenggunaController::class, 'edit']) -> middleware(['auth', 'mustadmin']);
    Route::put('/{id}', [PenggunaController::class, 'update']) -> middleware(['auth', 'mustadmin']);
    Route::delete('/{id}', [PenggunaController::class, 'destroy']) -> middleware(['auth', 'mustadmin']);
});

Route::prefix('gruppengguna')->group(function () {
    Route::get('/', [GruppenggunaController::class, 'index']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/create', [GruppenggunaController::class, 'create']) -> middleware(['auth', 'mustadmin']);
    Route::post('/store', [GruppenggunaController::class, 'store']) -> middleware(['auth', 'mustadmin']);
    Route::get('/{id}/edit', [GruppenggunaController::class, 'edit']) -> middleware(['auth', 'mustadmin']);
    Route::put('/{id}', [GruppenggunaController::class, 'update']) -> middleware(['auth', 'mustadmin']);
    Route::delete('/{id}', [GruppenggunaController::class, 'destroy']) -> middleware(['auth', 'mustadmin']);
});

Route::prefix('slider')->group(function () {
    Route::get('/', [SliderController::class, 'index']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/create', [SliderController::class, 'create']) -> middleware(['auth', 'mustadminorstaff']);
    Route::post('/store', [SliderController::class, 'store']) -> middleware(['auth', 'mustadminorstaff']);
    Route::get('/{id}/edit', [SliderController::class, 'edit']) -> middleware(['auth', 'mustadminorstaff']);
    Route::put('/{id}', [SliderController::class, 'update']) -> middleware(['auth', 'mustadminorstaff']);
    Route::delete('/{id}', [SliderController::class, 'destroy']) -> middleware(['auth', 'mustadmin']);

});

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'indexRegister'])->name('register');
Route::post('/registerproses', [RegisterController::class, 'registerproses'])->name('registerproses');

