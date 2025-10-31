<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pulpen', 'jenis' => 'Alat Tulis', 'harga' => 5000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat Tulis', 'harga' => 7000],
    ];
    return view('produk', compact('produk'));
});

Route::get('/produk/tambah', function () {
    return view('tambah-produk');
});
