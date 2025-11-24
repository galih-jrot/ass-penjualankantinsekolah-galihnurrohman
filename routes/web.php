<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('latihan')->group(function () {
    Route::get('/transaksi/search', [TransaksiController::class, 'search'])->name('transaksi.search');
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('produk', App\Http\Controllers\ProdukController::class);
    Route::resource('transaksi', TransaksiController::class);
})->middleware('auth');

//test template
Route::get('admin', function(){
    return view('dashboard.home');
})->name('admin');
