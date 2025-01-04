<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

       // Route untuk SuratMasukController (tanpa resource)
    Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index'); // Tampilkan daftar surat masuk
    Route::get('/surat-masuk/create', [SuratMasukController::class, 'create'])->name('surat-masuk.create'); // Form tambah surat masuk
    Route::post('/surat-masuk', [SuratMasukController::class, 'store'])->name('surat-masuk.store'); // Simpan surat masuk
    Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show'); // Tampilkan detail surat masuk
    Route::get('/surat-masuk/{id}/edit', [SuratMasukController::class, 'edit'])->name('surat-masuk.edit'); // Form edit surat masuk
    Route::patch('/surat-masuk/{id}', [SuratMasukController::class, 'update'])->name('surat-masuk.update'); // Update surat masuk
    Route::delete('/surat-masuk/{id}', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy'); // Hapus surat masuk
    Route::get('surat-masuk/{suratMasuk}/download', [SuratMasukController::class, 'download'])->name('surat-masuk.download');


    // Route untuk SuratKeluarController
    Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index'); // Tampilkan daftar surat keluar
    Route::get('/surat-keluar/create', [SuratKeluarController::class, 'create'])->name('surat-keluar.create'); // Form tambah surat keluar
    Route::post('/surat-keluar', [SuratKeluarController::class, 'store'])->name('surat-keluar.store'); // Simpan surat keluar
    Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show'); // Tampilkan detail surat keluar
    Route::get('/surat-keluar/{id}/edit', [SuratKeluarController::class, 'edit'])->name('surat-keluar.edit'); // Form edit surat keluar
    Route::patch('/surat-keluar/{id}', [SuratKeluarController::class, 'update'])->name('surat-keluar.update'); // Update surat keluar
    Route::delete('/surat-keluar/{id}', [SuratKeluarController::class, 'destroy'])->name('surat-keluar.destroy'); // Hapus surat keluar
    Route::get('/surat-keluar/{id}/download', [SuratKeluarController::class, 'download'])->name('surat-keluar.download'); // Download file surat keluar

});



require __DIR__.'/auth.php';
