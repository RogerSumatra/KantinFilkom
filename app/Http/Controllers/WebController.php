<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Seller;
use App\Models\Menu;
use App\Models\History;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

class WebController extends Controller
{
    public function index()
    {
        if (Auth::user() == null) {
            $toko = Seller::all();
            return view('web.homepage', compact('toko'));
        } else {
            $user = Auth::user();
            $item = Item::where('user_id', $user->id)->get();
            $toko = Seller::all();
            return view('web.homepage', compact('toko', 'item'));
        }
    }

    public function qris()
    {
        return view('web.qris');
    }

    public function konfirmasiPembayaran(Request $request)
    {
        $userId = Auth::id();
        $cartItems = Item::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('homepage')->with('error', 'Keranjang anda kosong');
        }

        $subtotal = $cartItems->sum(function ($item) {
            return $item->menu->price * $item->quantity;
        });

        $ppn = $subtotal * 0.1; //PPN 10%
        $totalHarga = $subtotal + $ppn;

        $toko = Seller::find($cartItems->first()->menu->seller_id);

        // Simpan transaksi
        DB::transaction(function () use ($userId, $cartItems, $totalHarga) {
            foreach ($cartItems as $item) {
                History::create([
                    'user_id' => $userId,
                    'menu_id' => $item->menu->id,
                    'quantity' => $item->quantity,
                    'total_price' => $totalHarga,
                    'status' => 'confirmed'
                ]);

                // Hapus item dari keranjang setelah konfirmasi pembayaran
                $item->delete();
            }
        });

        return view('web.konfirmasiPembayaran', compact('cartItems', 'subtotal', 'ppn', 'totalHarga', 'toko'));
    }

    public function get_seller($id)
    {
        $user = Auth::user();
        $item = Item::where('user_id', $user)->get();

        // Time zone sekarang
        $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $current_time = $now->format('H:i');

        $toko = Seller::find($id);
        $jam_operasional = $toko->jam_buka;

        // ambil jam_buka dan jam_tutup dengan pisah -
        list($jam_buka, $jam_tutup) = explode(' - ', $jam_operasional);

        // Tentukan status buka atau tutup berdasarkan waktu saat ini
        $is_open = ($current_time >= $jam_buka && $current_time <= $jam_tutup);

        //get makanan and minuman
        $makanan = Menu::where('seller_id', $id)->where('types', 'Makanan')->get();
        $minuman = Menu::where('seller_id', $id)->where('types', 'Minuman')->get();

        return view('web.penjual', compact('toko', 'makanan', 'minuman', 'jam_operasional', 'is_open', 'item'));
    }
}
