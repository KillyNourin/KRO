<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'barang'; // <- WAJIB: karena nama tabel kamu adalah `barang`

    protected $fillable = [
        'nama', 'harga', 'slug', 'deskripsi', 'gambar'
    ];
}
