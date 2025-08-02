<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = 'detail_orders';
    protected $primaryKey = 'id_detail';
    public $timestamps = false;

    protected $fillable = [
    'id_order',
    'id_barang',
    'type',
    'jumlah',
    'harga_satuan',
    'subtotal',
    ];
}

