<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('checkout', function () {
    return view('checkout');
});
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');