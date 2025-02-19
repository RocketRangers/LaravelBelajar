<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;


// // Menampilkan semua buku
// Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

// // Menampilkan form tambah buku
// Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// // Menyimpan buku baru
// Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

// // Menampilkan detail buku
// Route::get('/buku/{buku}', [BukuController::class, 'show'])->name('buku.show');

// // Menampilkan form edit buku
// Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');

// // Memperbarui buku
// Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');

// // Menghapus buku
// Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::resource('buku', BukuController::class);
