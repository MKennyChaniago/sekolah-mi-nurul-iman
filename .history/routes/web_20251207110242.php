<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Panggil Controller yang akan kita pakai
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\AkademikController;
use App\Http\Controllers\Admin\KesiswaanController;

/*
|--------------------------------------------------------------------------
| A. JALUR OTENTIKASI (LOGIN & LOGOUT)
|--------------------------------------------------------------------------
*/
// Kita pakai LoginController yang sudah kita edit sebelumnya (pakai username)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Redirect /admin ke /admin/dashboard jika sudah login
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});


/*
|--------------------------------------------------------------------------
| B. JALUR FRONTEND (PUBLIK / PENGUNJUNG)
|--------------------------------------------------------------------------
| Ini bisa diakses siapa saja tanpa login.
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('profil')->group(function () {
    Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('profil.sejarah');
    Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('profil.visi_misi');
    Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->name('profil.struktur');
});

Route::get('/berita', [HomeController::class, 'berita'])->name('berita.listing');
Route::get('/berita/{slug}', [HomeController::class, 'detailBerita'])->name('berita.detail');

Route::get('/guru-staff', [HomeController::class, 'guru'])->name('akademik.guru_staff');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

Route::get('/kesiswaan', [HomeController::class, 'kesiswaan'])->name('kesiswaan');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('akademik.kurikulum');
Route::get('/produk-hukum', [HomeController::class, 'produkHukum'])->name('akademik.produk_hukum');


/*
|--------------------------------------------------------------------------
| C. JALUR BACKEND (ADMINISTRATOR)
|--------------------------------------------------------------------------
| Semua route di dalam grup ini WAJIB LOGIN dulu (middleware auth).
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // 1. Dashboard (Halaman Utama Admin)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 2. Manajemen Berita (Otomatis buat route index, create, store, edit, update, destroy)
    Route::resource('berita', BeritaController::class);

    // 3. Manajemen Guru
    Route::resource('guru', GuruController::class);

    // 4. Manajemen Siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    // Nanti tambahkan route import excel di sini

    // 5. Manajemen Galeri
    Route::resource('galeri', GaleriController::class);

    // 6. Profil Sekolah (Single Data)
    Route::get('/sejarah', [ProfilController::class, 'editSejarah'])->name('sejarah');
    Route::put('/sejarah', [ProfilController::class, 'updateSejarah'])->name('sejarah.update');
    
    Route::get('/visi-misi', [ProfilController::class, 'editVisiMisi'])->name('visimisi');
    Route::put('/visi-misi', [ProfilController::class, 'updateVisiMisi'])->name('visimisi.update');
    
    Route::get('/struktur', [ProfilController::class, 'editStruktur'])->name('struktur');
    Route::put('/struktur', [ProfilController::class, 'updateStruktur'])->name('struktur.update');

    // 7. Akademik & Kesiswaan
    Route::get('/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum.index');
    Route::get('/produk-hukum', [AkademikController::class, 'produkHukum'])->name('produk_hukum.index');
    Route::get('/ekstrakurikuler', [KesiswaanController::class, 'ekskul'])->name('ekstrakurikuler.index');
    Route::get('/program-unggulan', [KesiswaanController::class, 'program'])->name('program.index');

});