<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
// ... import controller lainnya ...
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\AkademikController;
use App\Http\Controllers\Admin\KesiswaanController;

/*
|--------------------------------------------------------------------------
| A. JALUR OTENTIKASI
|--------------------------------------------------------------------------
*/
// PERBAIKAN: Hapus "->middleware('guest')" dari sini!
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| B. JALUR FRONTEND (PUBLIK)
|--------------------------------------------------------------------------
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

Route::get('/kesiswaan', [HomeController::class, 'kesiswaan'])->name('kesiswaan');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('akademik.kurikulum');
Route::get('/produk-hukum', [HomeController::class, 'produkHukum'])->name('akademik.produk_hukum');

/*
|--------------------------------------------------------------------------
| C. JALUR BACKEND (ADMINISTRATOR)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    // Redirect /admin ke dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Resource Routes
    Route::resource('berita', BeritaController::class)->parameters(['berita' => 'berita']);
    Route::resource('guru', GuruController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('siswa', SiswaController::class); // Changed to resource
    
    // Profil Routes
    Route::get('/sejarah', [ProfilController::class, 'editSejarah'])->name('sejarah');
    Route::put('/sejarah', [ProfilController::class, 'updateSejarah'])->name('sejarah.update');
    
    Route::get('/visi-misi', [ProfilController::class, 'editVisiMisi'])->name('visimisi');
    Route::put('/visi-misi', [ProfilController::class, 'updateVisiMisi'])->name('visimisi.update');
    
    Route::get('/struktur', [ProfilController::class, 'editStruktur'])->name('struktur');
    Route::put('/struktur', [ProfilController::class, 'updateStruktur'])->name('struktur.update');

    Route::get('/kontak', [ProfilController::class, 'editKontak'])->name('kontak');
    Route::put('/kontak', [ProfilController::class, 'updateKontak'])->name('kontak.update');

    Route::get('/beranda', [ProfilController::class, 'editBeranda'])->name('beranda');
    Route::put('/beranda', [ProfilController::class, 'updateBeranda'])->name('beranda.update');

    // Akademik Routes
    // Kurikulum
    Route::get('/kurikulum', [AkademikController::class, 'kurikulum'])->name('kurikulum.index');
    Route::post('/kurikulum', [AkademikController::class, 'storeKurikulum'])->name('kurikulum.store');
    Route::put('/kurikulum/{subject}', [AkademikController::class, 'updateKurikulum'])->name('kurikulum.update');
    Route::delete('/kurikulum/{subject}', [AkademikController::class, 'destroyKurikulum'])->name('kurikulum.destroy');

    // Produk Hukum
    Route::get('/produk-hukum', [AkademikController::class, 'produkHukum'])->name('produk_hukum.index');
    Route::post('/produk-hukum', [AkademikController::class, 'storeProdukHukum'])->name('produk_hukum.store');
    Route::put('/produk-hukum/{document}', [AkademikController::class, 'updateProdukHukum'])->name('produk_hukum.update');
    Route::delete('/produk-hukum/{document}', [AkademikController::class, 'destroyProdukHukum'])->name('produk_hukum.destroy');

    // Kesiswaan Routes
    // Ekstrakurikuler
    Route::get('/ekstrakurikuler', [KesiswaanController::class, 'ekskul'])->name('ekstrakurikuler.index');
    Route::post('/ekstrakurikuler', [KesiswaanController::class, 'storeEkskul'])->name('ekstrakurikuler.store');
    Route::put('/ekstrakurikuler/{extracurricular}', [KesiswaanController::class, 'updateEkskul'])->name('ekstrakurikuler.update');
    Route::delete('/ekstrakurikuler/{extracurricular}', [KesiswaanController::class, 'destroyEkskul'])->name('ekstrakurikuler.destroy');

    // Program Unggulan
    Route::get('/program-unggulan', [KesiswaanController::class, 'program'])->name('program.index');
    Route::post('/program-unggulan', [KesiswaanController::class, 'storeProgram'])->name('program.store');
    Route::put('/program-unggulan/{program}', [KesiswaanController::class, 'updateProgram'])->name('program.update');
    Route::delete('/program-unggulan/{program}', [KesiswaanController::class, 'destroyProgram'])->name('program.destroy');
});