<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method buat nampilin halaman form tambah produk
    // Kita kirim array jenis produk ke view biar bisa dipilih di dropdown
    public function create()
    {
        $jenisProduk = ['Alat tulis', 'Elektronik', 'Sembako'];
        return view('tambah-produk', compact('jenisProduk'));
    }

    // Method buat nyimpan data produk yang dikirim dari form
    // Ada validasi dulu biar data yang masuk bener dan aman
    public function store(Request $request)
    {
        // Validasi input dari user, pastikan semua field diisi dengan benar
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string',
            'harga' => 'required|integer|min:0',
        ]);

        // Simpan data ke database pake model Product
        Product::create($request->all());

        // Balik ke halaman daftar produk dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
