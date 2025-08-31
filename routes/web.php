<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;


// =====================================
// 🔹 STATIC & PUBLIC ROUTES
// =====================================
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('home', function () {
    return view('home');
});
Route::get('/laptop', function () {
    return view('laptop');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('PCsMb', function () {
    return view('PCsMb');
});
Route::get('PCsCPU', function () {
    return view('PCsCPU');
});
Route::get('PCsGPU', function () {
    return view('PCsGPU');
});
Route::get('Deals', function () {
    return view('Deals');
});

// HOME & STATIC
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/home', 'home');
Route::view('/PCsMb', 'PCsMb');
Route::view('/PCsCPU', 'PCsCPU');
Route::view('/PCsGPU', 'PCsGPU');
Route::view('/laptop', 'laptop');
Route::view('/Deals', 'Deals');

// =====================================
// 🔹 CUSTOM LOGIN (Popup-based)
// =====================================
Route::get('/login', function () {
    return redirect('/'); // Menampilkan popup login
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
         logger('LOGIN SUCCESS: ' . Auth::user()->id); // Tambahkan ini
        return redirect('/')->with('success', 'Login berhasil!');
    }

    return back()->withErrors([
        'login' => 'Username atau password salah.',
    ]);
})->name('login.custom');
Route::post('/register', function (Request $request) {
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => explode('@', $request->email)[0], // default nama dari email
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    Auth::login($user); // login otomatis setelah register
    return redirect('/')->with('success', 'Akun berhasil dibuat dan login!');
})->name('register.custom');
// =====================================
// 🔹 DEBUG
// =====================================
Route::get('/debug-user', function () {
    return dd(Auth::user());
});

// =====================================
// 🔹 PRODUK ROUTE
// =====================================
Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('product.detail');

// =====================================
// 🔹 KERANJANG ROUTE (Bebas Akses)
// =====================================
Route::post('/keranjang/tambah', [OrderController::class, 'tambah'])->name('keranjang.tambah');
Route::delete('/keranjang/hapus/{id}', [OrderController::class, 'hapus'])->name('keranjang.hapus');

// =====================================
// 🔐 ROUTE YANG BUTUH LOGIN
// =====================================
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/submit', [OrderController::class, 'submitOrder'])->name('order.submit');

    // Konfirmasi setelah bayar
    Route::post('/checkout/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi');
    Route::get('/order/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi.page');
});

// =====================================
// 🔧 UTILITAS / DEBUG
// =====================================
Route::get('/fix-passwords', function () {
    User::all()->each(function ($user) {
        if (!Hash::needsRehash($user->password)) return;

        $user->password = bcrypt($user->password);
        $user->save();
    });

    return 'Semua password sudah di-hash!';
});

Route::post('/checkout/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi');
Route::get('/order/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi.page');

//route deals
Route::get('Deals', function () {
    return view('Deals');
});

//route untuk profil login
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


