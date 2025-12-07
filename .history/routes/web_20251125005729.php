<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
// Anda mungkin akan membuat Controller baru, contohnya:
// use App\Http\Controllers\ProfileController;

// --- A. ROUTE FRONTEND (MI NURUL IMAN) ---

// 1. HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. PROFIL (Menggunakan grup untuk submenu)
Route::prefix('profil')->group(function () {
    Route::get('/sejarah', function () { return view('profil.sejarah'); })->name('profil.sejarah');
    Route::get('/visi-misi', function () { return view('profil.visi_misi'); })->name('profil.visi_misi');
    Route::get('/struktur-organisasi', function () { return view('profil.struktur'); })->name('profil.struktur');
});

// 3. KESISWAAN
Route::get('/kesiswaan', function () { return view('kesiswaan.index'); })->name('kesiswaan');

// 4. BERITA & ARTIKEL
// Listing Berita Utama
Route::get('/berita', function () { return view('berita.listing'); })->name('berita.listing');
// Detail Berita dengan parameter dinamis (slug)
Route::get('/berita/{slug}', function ($slug) { return view('berita.detail', compact('slug')); })->name('berita.detail');

// 5. AKADEMIK
Route::prefix('akademik')->group(function () {
    Route::get('/kurikulum', function () { return view('akademik.kurikulum'); })->name('akademik.kurikulum');
    Route::get('/guru-staff', function () { return view('akademik.guru_staff'); })->name('akademik.guru_staff');
    Route::get('/produk-hukum', function () { return view('akademik.produk_hukum'); })->name('akademik.produk_hukum');
});

// 6. Galeri
Route::get('/galeri', function () { return view('galeri.index'); })->name('galeri');

// 7. KONTAK MANDIRI (Formulir Kontak)
Route::get('/kontak', function () { return view('kontak'); })->name('kontak');


// --- B. ROUTE BACKEND (ADMIN) ---

// 1. Route Login
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

// 2. Route Register
Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

// 3. Route Dashboard (INI TUJUANNYA)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');