<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Misal dari form: user_id, items[] (isi: id_barang, jumlah)
            $items = $request->input('items'); // array barang
            $userId = $request->input('user_id');

            $total = 0;
            $order = Order::create([
                'id_user' => $userId,
                'tgl' => now(),
                'status' => 'pending',
                'total' => 0, // akan diupdate nanti
            ]);

            foreach ($items as $item) {
                $barang = Barang::findOrFail($item['id_barang']);

                if ($barang->stok < $item['jumlah']) {
                    throw new \Exception("Stok untuk {$barang->seri} tidak mencukupi.");
                }

                $hargaSatuan = $barang->harga;
                $subtotal = $hargaSatuan * $item['jumlah'];

                DetailOrder::create([
                    'id_order' => $order->id_order,
                    'id_barang' => $barang->id_barang,
                    'type' => $barang->kategori,
                    'jumlah' => $item['jumlah'],
                    'harga_satuan' => $hargaSatuan,
                    'subtotal' => $subtotal,
                ]);

                // Kurangi stok
                $barang->stok -= $item['jumlah'];
                $barang->save();

                $total += $subtotal;
            }

            // Update total di orders
            $order->total = $total;
            $order->save();

            DB::commit();

            return redirect()->back()->with('success', 'Checkout berhasil!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Checkout gagal: ' . $e->getMessage());
        }
    }
}
