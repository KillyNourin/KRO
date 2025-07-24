<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Sesuaikan kolom yang bisa diisi
    protected $fillable = ['username', 'password', 'phone'];

    // Nonaktifkan timestamps karena tabel kamu tidak punya created_at & updated_at
    public $timestamps = false;

    // Sembunyikan password jika diperlukan
    protected $hidden = ['password'];

    // Override agar login pakai username, bukan email
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
