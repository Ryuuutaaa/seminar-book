<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KonfrimasiPesananController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Halaman beranda
Route::get("/", [WelcomeController::class, 'index'])->name("welcome");

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
    Route::get("/admin/seminar/create", [SeminarController::class, 'create'])->name("admin.seminar.create");
    Route::post("/admin/seminar/store", [SeminarController::class, 'store'])->name("admin.seminar.store");
    Route::get('/admin/seminar/{id}', [SeminarController::class, 'show'])->name('admin.seminar.show');
    Route::get("/admin/seminar/{id}/edit", [SeminarController::class, 'edit'])->name("admin.seminar.edit");
    Route::put("/admin/seminar/{id}/update", [SeminarController::class, 'update'])->name("admin.seminar.update");
    Route::delete("/admin/seminar/{id}/destroy", [SeminarController::class, 'destroy'])->name("admin.seminar.destroy");





    // admin peserta
    Route::get('/admin/peserta', [PesertaController::class, 'index'])->name('admin.peserta.index');
    Route::put('/admin/peserta/{id}/update', [PesertaController::class, 'update'])->name('admin.peserta.update');

    // admin konfrimasi pesanan
    Route::get("/admin/konfirmasi-pesanan", [KonfrimasiPesananController::class, 'index'])->name("admin.konfrimasiPesanan.index");
    Route::put('/admin/konfirmasi-pesanan/{id}', [KonfrimasiPesananController::class, 'update'])->name('admin.konfrimasiPesanan.update');
    Route::get('/export-pdf', [KonfrimasiPesananController::class, 'exportPdf'])->name('transaction.export-pdf');



    // Peserta route
    Route::get('/peserta/dashboard', [DashboardController::class, 'indexPeserta'])->name('peserta.index');
    Route::get("/peserta/history", [HistoryController::class, 'index'])->name("peserta.history.index");
    Route::get("/peserta/booking/{id}", [HistoryController::class, 'booking'])->name("peserta.history.booking");
    Route::post('/peserta/booking/confirm-booking/{id}', [HistoryController::class, 'confirmBooking'])->name('peserta.history.confirmBooking');




    // Profile route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (di-generate oleh Laravel Breeze atau UI scaffolding)
require __DIR__ . '/auth.php';
