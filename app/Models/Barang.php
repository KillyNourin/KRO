<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;

    protected $fillable = [
        'seri',
        'merk',
        'kategori',
        'stok',
        'harga',
    ];

    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class, 'id_barang', 'id_barang');
    }
}
    