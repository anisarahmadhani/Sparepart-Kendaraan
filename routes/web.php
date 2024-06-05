<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Pelanggan\PelangganController;
use App\Http\Controllers\Sparepart\SparepartController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

Route::middleware(['belum_login'])->group(function(){
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'proses_login'])->name('proses_login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'proses_regis'])->name('proses_regis');
});

Route::middleware(['sudah_login'])->group(function(){
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    
    
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // supplier
    Route::get('suplier', [SuplierController::class, 'index'])->name('suplier');
    Route::get('tambah.suplier', [SuplierController::class, 'tambah'])->name('tambah.suplier');
    Route::post('input.suplier', [SuplierController::class, 'input'])->name('input.suplier');
    Route::get('edit.suplier/{id}', [SuplierController::class, 'edit'])->name('edit.suplier');
    Route::post('update.suplier/{id}', [SuplierController::class, 'update'])->name('update.suplier');
    Route::get('delete.suplier/{id}', [SuplierController::class, 'delete'])->name('delete.suplier');
    // sparepart
    Route::get('sparepart', [SparepartController::class, 'index'])->name('sparepart');
    Route::get('tambah.sparepart', [SparepartController::class, 'tambah'])->name('tambah.sparepart');
    Route::post('input.sparepart', [SparepartController::class, 'input'])->name('input.sparepart');
    Route::get('edit.sparepart/{id}', [SparepartController::class, 'edit'])->name('edit.sparepart');
    Route::post('update.sparepart/{id}', [SparepartController::class, 'update'])->name('update.sparepart');
    Route::get('delete.sparepart/{id}', [SparepartController::class, 'delete'])->name('delete.sparepart');
    //pelanggan
    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::get('tambah.pelanggan', [PelangganController::class, 'tambah'])->name('tambah.pelanggan');
    Route::post('input.pelanggan', [PelangganController::class, 'input'])->name('input.pelanggan');
    Route::get('edit.pelanggan/{id}', [PelangganController::class, 'edit'])->name('edit.pelanggan');
    Route::post('update.pelanggan/{id}', [PelangganController::class, 'update'])->name('update.pelanggan');
    Route::get('delete.pelanggan/{id}', [PelangganController::class, 'delete'])->name('delete.pelanggan');
    //order
    Route::get('order', [OrderController::class, 'index'])->name('order');
    Route::get('tambah.order', [OrderController::class, 'tambah'])->name('tambah.order');
    Route::post('input.order', [OrderController::class, 'input'])->name('input.order');
    Route::get('edit.order/{id}', [OrderController::class, 'edit'])->name('edit.order');
    Route::post('update.order/{id}', [OrderController::class, 'update'])->name('update.order');
    Route::get('delete.order/{id}', [OrderController::class, 'delete'])->name('delete.order');
    
});



