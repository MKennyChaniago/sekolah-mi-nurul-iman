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

// ... (Route Login, Register, Dashboard sebelumnya) ...

// --- GROUP: PROFIL SEKOLAH ---
Route::get('/admin/sejarah', function () {
    return view('admin.profil.sejarah'); // Perlu buat file
})->name('admin.sejarah');

Route::get('/admin/visi-misi', function () {
    return view('admin.profil.visimisi'); // Perlu buat file
})->name('admin.visimisi');

Route::get('/admin/struktur', function () {
    return view('admin.profil.struktur'); // Perlu buat file
})->name('admin.struktur');


// --- GROUP: DATA MASTER ---
Route::get('/admin/guru', function () {
    return view('admin.guru.index');
})->name('admin.guru.index');

Route::get('/admin/guru/create', function () {
    return view('admin.guru.create'); 
})->name('admin.guru.create');

Route::get('/admin/siswa', function () {
    return view('admin.siswa.index');
})->name('admin.siswa.index');


// --- GROUP: AKADEMIK ---
Route::get('/admin/kurikulum', function () {
    return view('admin.akademik.kurikulum'); // Perlu buat file
})->name('admin.kurikulum.index');

Route::get('/admin/produk-hukum', function () {
    return view('admin.akademik.produkhukum'); 
})->name('admin.produkhukum.index'); // <-- INI BENAR (tanpa underscore, sesuai dashboard)


// --- GROUP: KESISWAAN ---
Route::get('/admin/ekstrakurikuler', function () {
    return view('admin.kesiswaan.ekskul'); // Perlu buat file
})->name('admin.ekstrakurikuler.index');

Route::get('/admin/program-unggulan', function () {
    return view('admin.kesiswaan.program'); // Perlu buat file
})->name('admin.prestasi.index');


// --- GROUP: PUBLIKASI ---
Route::get('/admin/berita', function () {
    return view('admin.berita.index');
})->name('admin.berita.index');

Route::get('/admin/berita/create', function () {
    return view('admin.berita.create');
})->name('admin.berita.create');

Route::get('/admin/galeri', function () {
    return view('admin.galeri.index');
})->name('admin.galeri.index');