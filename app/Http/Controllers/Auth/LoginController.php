<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Tambahkan ini
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
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
    public function register(Request $request)
    {
        // optional: quick debug kalau form tidak sampai
        // \Log::info('Register request', $request->all());

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
            'phone'    => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // create user
        $user = User::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'phone'    => $request->input('phone'),
        ]);

        if (!$user) {
            // log error jika gagal insert
            \Log::error('User creation failed', ['request' => $request->all()]);
            return redirect()->back()->with('error', 'Gagal membuat akun. Cek log.');
        }

        return redirect()->back()->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}