<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Barang;

class OrderController extends Controller
{
        public function tambah(Request $request)
        {
            $request->validate([
                'id' => 'required',
                'name' => 'required',
                'price' => 'required|numeric',
                'qty' => 'required|numeric',
                'img' => 'nullable|string'
            ]);

            $keranjang = Session::get('keranjang', []);

            $id = $request->id;

            if (isset($keranjang[$id])) {
                $keranjang[$id]['qty'] += $request->qty;
            } else {
                $keranjang[$id] = [
                    'name' => $request->name,
                    'price' => $request->price,
                    'qty' => $request->qty,
                    'img' => $request->img
                ];
            }

            Session::put('keranjang', $keranjang);

            return response()->json(['success' => true]);
        }

        public function checkout()
        {
            $keranjang = Session::get('keranjang', []);
            return view('checkout', compact('keranjang'));
        }
public function hapus($id)
{
    $keranjang = Session::get('keranjang', []);

    if (isset($keranjang[$id])) {
        unset($keranjang[$id]);
        Session::put('keranjang', $keranjang);
    }

    return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
}
public function submitOrder(Request $request)
{
    $keranjang = Session::get('keranjang', []);
    if (empty($keranjang)) {
        return redirect('/')->with('error', 'Keranjang kosong');
    }

    $total = collect($keranjang)->reduce(function ($carry, $item) {
        return $carry + ($item['price'] * $item['qty']);
    }, 0);

    // Simpan ke tabel orders
    $order = Order::create([
        'id_users' => Auth::id(),
        'tgl' => now()->toDateString(),
        'status' => 'menunggu',
        'total' => $total
    ]);
    // dd($keranjang);
    // Simpan ke detail_orders
    foreach ($keranjang as $produkId => $item) {
        $type = Barang::find($produkId)?->kategori ?? 'Unknown';
        DetailOrder::create([
            'id_order' => $order->id_order,
            'id_barang' => $produkId, // Ganti dari 'produk_id' ke 'id_barang'
            'type' => $type, // Atau ambil dari produk, misalnya $item['type']
            'jumlah' => $item['qty'],
            'harga_satuan' => $item['price'],
            'subtotal' => $item['price'] * $item['qty'],
        ]);
    }

    // Kosongkan session
    Session::forget('keranjang');

 // Setelah simpan data
return redirect()->route('order.konfirmasi.page', ['id' => $order->id_order]);
}
public function konfirmasi($id)
{
    $order = Order::findOrFail($id);
    $order->status = 'paid';
    $order->save();

    return redirect('/')->with('success', 'Pembayaran berhasil dikonfirmasi!');
}


}