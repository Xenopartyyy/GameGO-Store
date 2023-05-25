<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;



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
Route::get('/produk/daftarproduk', [ProdukController::class, 'index']); 
Route::get('/produk/kategori', [KategoriController::class, 'index']); 
Route::get('/pengguna/daftarpengguna', [PenggunaController::class, 'index']); 
Route::get('/pengguna/gruppengguna', [PenggunaController::class, 'indexdua']); 

Route::get('/tester', function(){
    return view ('tester');
});

