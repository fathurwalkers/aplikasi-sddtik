<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

// Login - Register Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/post-login', [LoginController::class, 'post_login'])->name('post-login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/post-register', [LoginController::class, 'post_register'])->name('post-register');
Route::post('/logout/post', [LoginController::class, 'logout'])->name('logout');

// Dashboard Route
Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/profile', [BackController::class, 'profile'])->name('profile');
    Route::post('/post-ubah-profile/{id}', [BackController::class, 'post_ubah_profile'])->name('post-ubah-profile');

    Route::get('/pemeriksaan/pilih-bulan', [PelayananController::class, 'pilih_bulan_pemeriksaan'])->name('pilih-bulan-pemeriksaan');
    Route::get('/pemeriksaan/berdasarkan-bulan', [PelayananController::class, 'pemeriksaan_berdasarkan_bulan'])->name('pemeriksaan-berdasarkan-bulan');

    Route::get('/data-peserta', [BackController::class, 'data_peserta'])->name('data-peserta');
    Route::post('/data-peserta/hapus/{id}', [BackController::class, 'hapus_peserta'])->name('hapus-peserta');
    Route::get('/data-pelaksana', [BackController::class, 'data_pelaksana'])->name('data-pelaksana');
    Route::post('/data-pelaksana/hapus/{id}', [BackController::class, 'hapus_pelaksana'])->name('hapus-pelaksana');
    Route::post('/post-tambah-pelaksana', [BackController::class, 'post_tambah_pelaksana'])->name('post-tambah-pelaksana');

    Route::get('/pilih-peserta', [BackController::class, 'pilih_peserta'])->name('pilih-peserta');
    Route::post('/post-pilih-peserta', [BackController::class, 'post_pilih_peserta'])->name('post-pilih-peserta');
    Route::post('/hapus-session-peserta', [BackController::class, 'hapus_session_peserta'])->name('hapus-session-peserta');
    Route::post('/post-tambah-peserta', [BackController::class, 'post_tambah_peserta'])->name('post-tambah-peserta');
    Route::post('/post-update-peserta/{id}', [BackController::class, 'post_update_peserta'])->name('post-update-peserta');
    Route::get('/hasil-pemeriksaan', [PelayananController::class, 'hasil_pemeriksaan'])->name('hasil-pemeriksaan');
    Route::get('/cetak-hasil-pemeriksaan/{id}', [PelayananController::class, 'cetak_hasil_pemeriksaan'])->name('cetak-hasil-pemeriksaan');

    // ==================================== Pelayanan Route ====================================
    // Deteksi Penyimpangan Pertumbuhan Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-pertumbuhan', [PelayananController::class, 'deteksi_penyimpangan_pertumbuhan'])->name('deteksi-penyimpangan-pertumbuhan');

    Route::get('/pelayanan/bbtb', [PelayananController::class, 'bbtb'])->name('bbtb');
    Route::post('/pelayanan/post-bbtb', [PelayananController::class, 'post_bbtb'])->name('post-bbtb');

    Route::get('/pelayanan/lk', [PelayananController::class, 'lk'])->name('lk');

    // Deteksi Penyimpangan Perkembangan Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-perkembangan', [PelayananController::class, 'deteksi_penyimpangan_perkembangan'])->name('deteksi-penyimpangan-perkembangan');

    Route::get('/pelayanan/kpsp', [PelayananController::class, 'kpsp'])->name('kpsp');
    Route::post('/pelayanan/post-kpsp', [PelayananController::class, 'post_kpsp'])->name('post-kpsp');

    Route::get('/pelayanan/tdd', [PelayananController::class, 'tdd'])->name('tdd');
    Route::post('/pelayanan/post-tdd', [PelayananController::class, 'post_tdd'])->name('post-tdd');

    Route::get('/pelayanan/tdl', [PelayananController::class, 'tdl'])->name('tdl');
    Route::post('/pelayanan/post-tdl', [PelayananController::class, 'post_tdl'])->name('post-tdl');

    // Deteksi Penyimpangan Mental Emosional Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-mental', [PelayananController::class, 'deteksi_penyimpangan_mental'])->name('deteksi-penyimpangan-mental');

    Route::get('/pelayanan/kmpe', [PelayananController::class, 'kmpe'])->name('kmpe');
    Route::post('/pelayanan/post-kmpe', [PelayananController::class, 'post_kmpe'])->name('post-kmpe');

    Route::get('/pelayanan/mchat', [PelayananController::class, 'mchat'])->name('mchat');
    Route::post('/pelayanan/post-mchat', [PelayananController::class, 'post_mchat'])->name('post-mchat');

    Route::get('/pelayanan/gpph', [PelayananController::class, 'gpph'])->name('gpph');
    Route::post('/pelayanan/post-gpph', [PelayananController::class, 'post_gpph'])->name('post-gpph');
    // ==================================== END Pelayanan Route ====================================

    Route::get('/generate-data', [GenerateController::class, 'generate_data'])->name('generate-data');
});
