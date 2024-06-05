<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;

class MenuController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Ambil menu berdasarkan query
        $menus = Menu::where('menus_name', 'like', "%{$query}%")->get();

        // Ambil semua seller_id dari hasil pencarian menu
        $sellerIds = $menus->pluck('seller_id')->unique();

        // Ambil data toko berdasarkan seller_id
        $toko = Seller::whereIn('id', $sellerIds)->get();

        // Implementasi open or nor
        $toko = $this->checkIfOpen($toko);

        return view('web.searchresult', compact('menus', 'toko', 'query'));
    }

    private function checkIfOpen($toko)
    {
        $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $current_time = $now->format('H:i');


        foreach ($toko as $store) {
            $jam_operasional = $store->jam_buka;

            // ambil jam_buka dan jam_tutup dengan pisah -
            list($jam_buka, $jam_tutup) = explode(' - ', $jam_operasional);

            // Tentukan status buka atau tutup berdasarkan waktu saat ini
            $is_open = ($current_time >= $jam_buka && $current_time <= $jam_tutup);
            // Misalkan kita punya field "is_open" di tabel toko
            if (!$is_open) {
                $status = false;
                $store->is_open = $status;
            } else {
                $status = true;
                $store->is_open = $status;
            }
        }
        return $toko;
    }
}
