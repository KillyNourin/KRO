<?php
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', function () {
    return view('home');
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
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/laptop', function () {
    return view('laptop');
});
Route::post('/login', function (Request $request) {
    $user = \App\Models\User::where('username', $request->username)->first();

    if ($user && $user->password === $request->password) {
        Auth::login($user);
        $request->session()->regenerate();

        // Tambahkan flash message
        return redirect('/')->with('success', 'Login berhasil!');
    }

    return back()->withErrors([
        'login' => 'Username atau password salah.',
    ]);
})->name('login.custom');


use App\Http\Controllers\ProdukController;

Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('product.detail');