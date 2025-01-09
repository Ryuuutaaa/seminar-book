<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Halaman beranda
Route::get('/', function () {
    return view('welcome');
});

// Route yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin route
    Route::get('/admin/dashboard', [DashboardController::class, 'indexAdmin'])->name('admin.index');

    // Peserta route
    Route::get('/peserta/dashboard', [DashboardController::class, 'indexPeserta'])->name('peserta.index');

    // Profile route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (di-generate oleh Laravel Breeze atau UI scaffolding)
require __DIR__ . '/auth.php';
