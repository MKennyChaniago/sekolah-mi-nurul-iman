// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AdminController; // Akan digunakan nanti

// Route Utama (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk Halaman Daftar Berita/Artikel (Topics Listing)
Route::get('/berita', function () {
    return view('berita.listing'); 
})->name('berita.listing');

// Route untuk Halaman Detail Berita/Artikel (Topics Detail)
// {slug} adalah parameter dinamis yang akan menentukan artikel mana yang dibuka
Route::get('/berita/{slug}', function ($slug) {
    return view('berita.detail', compact('slug')); 
})->name('berita.detail');

// Route untuk Halaman Kontak Mandiri (Contact Form)
Route::get('/kontak', function () {
    return view('kontak'); 
})->name('kontak');

// Route Login Admin
Route::get('/admin/login', function () {
    return view('admin.login'); 
})->name('admin.login');