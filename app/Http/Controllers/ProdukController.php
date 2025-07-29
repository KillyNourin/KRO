<?php
namespace App\Http\Controllers;

use App\Models\Barang;

class ProdukController extends Controller
{
    public function show($slug)
    {
        $produk = Barang::where('slug', $slug)->firstOrFail();
        return view('product-detail', compact('produk'));
    }
}

