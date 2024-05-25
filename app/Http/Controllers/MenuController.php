<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    

        return view('web.searchresult', compact('menus', 'toko', 'query'));
    }

    public function addMenu() {
        
    }
}
