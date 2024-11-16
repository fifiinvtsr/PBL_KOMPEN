<?php

use App\Http\Controllers\aDMAlphaController;
use App\Http\Controllers\aDMKompenController;
use App\Http\Controllers\aDTAdminController;
use App\Http\Controllers\aDTDosenController;
use App\Http\Controllers\aDTTenknisiController;
use App\Http\Controllers\AlphaController;
use App\Http\Controllers\aManageBidKomController;
use App\Http\Controllers\aManageDaMaKomController;
use App\Http\Controllers\aManageKompenController;
use App\Http\Controllers\aUpdateKompenController;
use App\Http\Controllers\aUserADTController;
use App\Http\Controllers\aUserMahasiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\aWelcomeController;
use App\Http\Controllers\dtDMAlphaController;
use App\Http\Controllers\dtDMKompenController;
use App\Http\Controllers\dtManageKompenController;
use App\Http\Controllers\dtUpdateKompenController;
use App\Http\Controllers\dtWelcomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LihatPilihKompenController;
use App\Http\Controllers\UpdateKompenSelesaiController;
use App\Http\Controllers\UpdateProgresTugasKompenController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page
Route::get('/', [LandingPageController::class, 'index']);

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);

// Logout
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

// Welcome for Mahasiswa
Route::get('/Mahasiswa', [WelcomeController::class, 'index']);

// Welcome for Admin
Route::get('/Admin', [aWelcomeController::class, 'index']);

// Welcome for Dosen/Teknisi
Route::get('/DosenTeknisi', [dtWelcomeController::class, 'index']);

// user as Mahasiswa
// Lihat dan Pilih Kompen
Route::get('/mLihatPilihKompen', [LihatPilihKompenController::class, 'index']);

// Update Progres Tugas Kompen
Route::get('/mUpdateProgresTugasKompen', [UpdateProgresTugasKompenController::class, 'index']);

// Update Kompen Selesai
Route::get('/mUpdateKompenSelesai', [UpdateKompenSelesaiController::class, 'index']);

// user as Admin
// User Admin/Dosen/Teknisi
Route::get('/aAdminDosenTeknisi', [aUserADTController::class, 'index']);

// User Mahasiswa
Route::get('/aMahasiswa', [aUserMahasiswaController::class, 'index']);

// Daftar Mahasiswa Alpha
Route::get('/aDaftarMahasiswaAlpha', [aDMAlphaController::class, 'index']);

// Daftar Mahasiswa Kompen
Route::get('/aDaftarMahasiswaKompen', [aDMKompenController::class, 'index']);

// Daftar Tugas Dosen
Route::get('/aDaftarTugasDosen', [aDTDosenController::class, 'index']);

// Daftar Tugas Teknisi
Route::get('/aDaftarTugasTeknisi', [aDTTenknisiController::class, 'index']);

// Daftar Tugas Admin
Route::get('/aDaftarTugasAdmin', [aDTAdminController::class, 'index']);

// Manage Bidang Kompetensi
Route::get('/aManageBidangKompetensi', [aManageBidKomController::class, 'index']);

// Manage Data Mahasiswa Kompen
Route::get('/aManageDataMahasiswaKompen', [aManageDaMaKomController::class, 'index']);

// Manage Kompen
Route::get('/aManageKompen', [aManageKompenController::class, 'index']);

// Update Kompen Selesai
Route::get('/aUpdateKompenSelesai', [aUpdateKompenController::class, 'index']);

// User as Dosen/Teknisi
// Daftar Mahasiswa Alpha
Route::get('/dtDaftarMahasiswaAlpha', [dtDMAlphaController::class, 'index']);

// Daftar Mahasiswa Kompen
Route::get('/dtDaftarMahasiswaKompen', [dtDMKompenController::class, 'index']);

// Manage Kompen
Route::get('/dtManageKompen', [dtManageKompenController::class, 'index']);

// Update Kompen
Route::get('/dtUpdateKompen', [dtUpdateKompenController::class, 'index']);