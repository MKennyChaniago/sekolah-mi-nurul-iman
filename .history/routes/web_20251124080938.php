<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
// use App\Http\Controllers\AdminController; // Akan digunakan nanti

// Route Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk Halaman Admin Login (Awal dari migrasi admin Anda)
Route::get('/admin/login', function () {
    // Kita akan buat View ini nanti, mungkin resources/views/admin/login.blade.php
    return view('admin.login'); 
})->name('admin.login');