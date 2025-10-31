<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk buat tabel.
     */
    public function up(): void
    {
        // Buat tabel products buat nyimpan data produk
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID otomatis sebagai primary key
            $table->string('kode'); // Kode produk, kayak BRG001
            $table->string('nama'); // Nama produk, kayak Pulpen
            $table->string('jenis'); // Jenis produk, kayak Alat tulis
            $table->integer('harga'); // Harga produk dalam rupiah
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Balikkan migrasi, hapus tabel kalo perlu.
     */
    public function down(): void
    {
        // Hapus tabel products kalo migrasi dirollback
        Schema::dropIfExists('products');
    }
};