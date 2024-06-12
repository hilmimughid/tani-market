<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail-produk', [HomeController::class, 'produkDetail'])->name('produk.detail');
Route::resource('/register', RegisterController::class);
Route::resource('/login', LoginController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/kategori-produk', KategoriProdukController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/pesanan', PesananController::class);
Route::resource('/slideshow', SlideshowController::class);
Route::resource('/user', UserController::class);
