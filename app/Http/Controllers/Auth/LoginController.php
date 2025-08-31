<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Tambahkan ini

class LoginController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // 1. Lakukan logout
        Auth::logout();

        // 2. Invalidate session agar tidak bisa digunakan lagi
        $request->session()->invalidate();

        // 3. Buat ulang token CSRF
        $request->session()->regenerateToken();

        // 4. Redirect ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Anda telah berhasil logout!');
    }
}