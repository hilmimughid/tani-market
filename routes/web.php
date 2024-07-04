<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\ProdukDetailController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\KategoriProdukController;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/produk/detail/{id}', [ProdukDetailController::class, 'index'])->name('produk.detail');

Route::resource('/register', RegisterController::class);
Route::get('/login', [AuthenticationController::class, 'index'])->name('login.index');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::group(['middleware' => 'role:Customer,Admin'], function () {
    Route::get('/beli/{id}/create', [BeliController::class, 'create'])->name('beli.create');
    Route::post('/beli', [BeliController::class, 'store'])->name('beli.store');
    Route::get('/beli/histori', [BeliController::class, 'histori'])->name('beli.histori');
    Route::get('/beli/histori/{id}', [BeliController::class, 'show'])->name('beli.show');
    Route::put('/beli/histori/{id}', [BeliController::class, 'update'])->name('beli.update');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['role:Admin']], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/kategori-produk', KategoriProdukController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/pesanan', PesananController::class);
    Route::resource('/slideshow', SlideshowController::class);
    Route::resource('/user', UserController::class);
});
