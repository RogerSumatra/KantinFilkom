<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Seller;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;

class WebController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $item = Item::where('user_id',);
        $toko = Seller::all();
        return view('web.homepage', compact('toko'));
       
    }

    public function pembayaran($item)
    {
        $menu = Menu::where('id', $item->menu_id)->get();
        $toko = Seller::where('id', $menu->seller_id)->get();
        return view('web.konfirmasiPembayaran', compact('item', 'toko'));
    }

    public function get_seller($id)
    {
        //Time zone sekarang
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

        return view('web.menu', compact('toko', 'makanan', 'minuman', 'jam_operasional', 'is_open'));
    }
}
