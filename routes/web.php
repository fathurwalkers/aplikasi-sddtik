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
    Route::get('/pilih-peserta', [BackController::class, 'pilih_peserta'])->name('pilih-peserta');
    Route::post('/post-pilih-peserta', [BackController::class, 'post_pilih_peserta'])->name('post-pilih-peserta');
    Route::get('/hasil-pemeriksaan', [PelayananController::class, 'hasil_pemeriksaan'])->name('hasil-pemeriksaan');

    // ==================================== Pelayanan Route ====================================
    // Deteksi Penyimpangan Pertumbuhan Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-pertumbuhan', [PelayananController::class, 'deteksi_penyimpangan_pertumbuhan'])->name('deteksi-penyimpangan-pertumbuhan');
    Route::get('/pelayanan/bbtb', [PelayananController::class, 'bbtb'])->name('bbtb');
    Route::get('/pelayanan/lk', [PelayananController::class, 'lk'])->name('lk');

    // Deteksi Penyimpangan Perkembangan Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-perkembangan', [PelayananController::class, 'deteksi_penyimpangan_perkembangan'])->name('deteksi-penyimpangan-perkembangan');
    Route::get('/pelayanan/kpsp', [PelayananController::class, 'kpsp'])->name('kpsp');
    Route::get('/pelayanan/tdd', [PelayananController::class, 'tdd'])->name('tdd');
    Route::get('/pelayanan/tdl', [PelayananController::class, 'tdl'])->name('tdl');


    // Deteksi Penyimpangan Mental Emosional Route
    Route::get('/pelayanan/deteksi-dini-penyimpangan-mental', [PelayananController::class, 'deteksi_penyimpangan_mental'])->name('deteksi-penyimpangan-mental');
    Route::get('/pelayanan/kmpe', [PelayananController::class, 'kmpe'])->name('kmpe');
    Route::get('/pelayanan/mchat', [PelayananController::class, 'mchat'])->name('mchat');
    Route::get('/pelayanan/gpph', [PelayananController::class, 'gpph'])->name('gpph');
    // ==================================== END Pelayanan Route ====================================

    Route::get('/generate-data', [GenerateController::class, 'generate_data'])->name('generate-data');
});
