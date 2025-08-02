<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;

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
use App\Http\Controllers\HomeController;

// HOME & STATIC
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/home', 'home');
Route::view('/PCsMb', 'PCsMb');
Route::view('/PCsCPU', 'PCsCPU');
Route::view('/PCsGPU', 'PCsGPU');
Route::view('/laptop', 'laptop');

// LOGIN CUSTOM

Route::get('/login', function () {
    return redirect('/'); // atau bisa ke mana pun yang menampilkan popup login
})->name('login');
Route::post('/login', function (Request $request) {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/')->with('success', 'Login berhasil!');
    }

    return back()->withErrors([
        'login' => 'Username atau password salah.',
    ]);
})->name('login.custom');
// Di route mana saja sementara, contoh:
Route::get('/debug-user', function () {
    return dd(Auth::user());
});

// PRODUK
Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('product.detail');

// KERANJANG & ORDER (tanpa login)
Route::post('/keranjang/tambah', [OrderController::class, 'tambah'])->name('keranjang.tambah');
Route::delete('/keranjang/hapus/{id}', [OrderController::class, 'hapus'])->name('keranjang.hapus');

// CHECKOUT & SUBMIT ORDER (HARUS LOGIN)
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/submit', [OrderController::class, 'submitOrder'])->name('order.submit');
});
Route::get('/fix-passwords', function () {
    \App\Models\User::all()->each(function ($user) {
        if (!\Illuminate\Support\Facades\Hash::needsRehash($user->password)) return;

        $user->password = bcrypt($user->password); // hash password lama
        $user->save();
    });

    return 'Semua password sudah dihash!';
});
Route::post('/checkout/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi');
Route::get('/order/konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi.page');
