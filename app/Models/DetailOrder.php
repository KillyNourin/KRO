<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = 'detail_orders';
    protected $primaryKey = 'id_det';
    public $timestamps = false;

    protected $fillable = [
        'id_order',
        'id_barang',
        'type',
        'jumlah',
        'harga_satuan',
        'subtotal',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id_order');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
