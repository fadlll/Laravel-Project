<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/demo-api-eksternal', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/users');
    $data = $response->successful() ? $response->json() : [];

    return view('api-eksternal', compact('data'));
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // Khusus role Admin (Akses Menu Buku)
    Route::middleware('cek.role:admin')->group(function () {
        Route::resource('buku', BukuController::class);
    });

    // Khusus role User biasa / Admin (Akses Menu Anggota)
    Route::middleware('cek.role:admin,user')->group(function () {
        Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);
    });

});

require __DIR__.'/auth.php';