<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'id_users',
        'tgl',
        'status',
        'total',
    ];

    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class, 'id_order', 'id_order');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
