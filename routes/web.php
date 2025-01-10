<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SeminarController;
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

    // admin kategor
    Route::get("/admin/kategori", [KategoriController::class, 'index'])->name("admin.kategori.index");
    Route::get("/admin/kategori/create", [KategoriController::class, 'create'])->name("admin.kategori.create");
    Route::post("/admin/kategori/store", [KategoriController::class, 'store'])->name("admin.kategori.store");
    Route::get("/admin/kategori/{id}/edit", [KategoriController::class, 'edit'])->name("admin.kategori.edit");
    Route::put("/admin/kategori/{id}/update", [KategoriController::class, 'update'])->name("admin.kategori.update");
    Route::delete("/admin/kategori/{id}/destroy", [KategoriController::class, 'destroy'])->name("admin.kategori.destroy");

    // admin seminar
    Route::get("/admin/seminar", [SeminarController::class, 'index'])->name("admin.seminar.index");







    // Peserta route
    Route::get('/peserta/dashboard', [DashboardController::class, 'indexPeserta'])->name('peserta.index');

    // Profile route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (di-generate oleh Laravel Breeze atau UI scaffolding)
require __DIR__ . '/auth.php';
