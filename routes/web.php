<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


// admin root
Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.root');


// manajement event admin
Route::get('/admin/manajement-event', function () {
    return view('admin.manajement-event.index');
})->name('admin.manajement-event.root');

Route::get('/admin/manajement-event/create', function () {
    return view('admin.manajement-event.create');
})->name('admin.manajement-event.create');

// manajement categorty event admin
Route::get('/admin/manajement-category', function () {
    return view('admin.manjement-category.index');
})->name('admin.manajement-category.root');
