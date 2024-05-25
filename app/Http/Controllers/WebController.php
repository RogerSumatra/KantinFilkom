<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $toko = Seller::all();
        return view('web.homepage', compact('toko'));
    }

    public function menu($id)
    {
        $toko = Seller::find($id);
        $menu = Menu::where('seller_id', $id)->get();
        return view('web.menu', compact('menu', 'toko'));
    }
}
