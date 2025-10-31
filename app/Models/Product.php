<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Ini buat ngasih tau Laravel field mana aja yang boleh diisi langsung dari input user
    // Biar aman, gak sembarang field yang bisa diubah
    protected $fillable = ['kode', 'nama', 'jenis', 'harga'];
}
