<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\DewanPembinaController;
use App\Http\Controllers\DewanPengawasController;
use App\Http\Controllers\DemisionerController;
use App\Http\Controllers\GalleryController;
use Filament\Pages\Dashboard;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('homepage.home');
});

// Rute untuk Gallery
Route::get('/gallery', [GalleryController::class, 'index']);  // Update route gallery

// Rute untuk halaman statis
Route::view('file-download', 'homepage.file-download');
Route::view('contact', 'homepage.contact');
Route::view('bim-imtsi', 'homepage.bim-imtsi');

// Rute Profil
Route::prefix('profil')->group(function () {
    Route::get('informasi-pengurus', [PengurusController::class, 'index']);
    Route::get('dewan-pembina', [DewanPembinaController::class, 'index']);
    Route::get('dewan-pengawas', [DewanPengawasController::class, 'index']);
    Route::get('demisioner', [DemisionerController::class, 'index']);
    Route::get('struktur-organisasi', function () {
        return view('profil.struktur-organisasi');
    })->name('profil.struktur-organisasi');
    Route::get('sejarah', function () {
        return view('profil.sejarah');
    })->name('profil.sejarah');
    Route::get('visi-misi', function () {
        return view('profil.visi-misi');
    })->name('profil.visi-misi');
    Route::get('logo-arti', function () {
        return view('profil.logo-arti');
    })->name('profil.logo-arti');
});

// Rute untuk akses file yang disimpan di storage
Route::middleware(['cors'])->group(function () {
    Route::get('storage/{filename}', function ($filename) {
        return response()->file(storage_path('app/public/' . $filename));
    });
});
