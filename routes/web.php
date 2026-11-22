<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
Route::get('/pasien/{id}', function ($id) {
 return 'Detail Pasien dengan ID: ' . $id;
});
Route::get('/dokter/{nama?}', function ($nama = 'Dokter') {
 return 'Nama: ' . $nama;
});
Route::get('/pasien', function () {
 return 'Data Pasien';
})->name('pasien.index');
Route::get('/pasien/{id}', [PatientController::class, 'show']);
Route::get('/klinik', function () {
 return 'Sistem Informasi Klinik';
});
Route::get('/pasien', function () {
 return 'Data pasien';
});
Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');

Route::get('/poli', [PoliController::class, 'index'])->name('poli.index');

Route::get('/dashboard', [DashboardController::class, 'index'])
 ->name('dashboard');

 Route::get('/pasien', [PatientController::class, 'index'])->name('pasien.index');