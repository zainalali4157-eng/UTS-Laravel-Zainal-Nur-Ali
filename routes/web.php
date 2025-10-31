<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route buat halaman home
Route::get('/', function () {
    return view('home');
});

// Route buat halaman daftar produk, sekarang ambil dari database
Route::get('/produk', function () {
    // Ambil semua produk dari database
    $produk = \App\Models\Product::all()->toArray();
    // Tambah data dummy kalo belum ada produk di database
    if (empty($produk)) {
        $produk = [
            ['kode' => 'BRG001', 'nama' => 'Pulpen', 'jenis' => 'Alat Tulis', 'harga' => 5000],
            ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat Tulis', 'harga' => 7000],
        ];
    }
    return view('produk', compact('produk'));
})->name('produk.index');

// Route buat nampilin form tambah produk
Route::get('/produk/tambah', [ProductController::class, 'create'])->name('produk.create');
// Route buat nyimpan data produk baru yang dikirim dari form
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');
