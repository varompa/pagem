<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KodeReferalController;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Pengguna
Route::resource('pengguna', PenggunaController::class);

// Rute untuk Pelanggan
Route::resource('pelanggan', PelangganController::class);

// Rute untuk Supplier
Route::resource('supplier', SupplierController::class);

// Rute untuk Transaksi
Route::resource('transaksi', TransaksiController::class);

// Rute untuk Kode Referal
Route::resource('kode_referal', KodeReferalController::class);
