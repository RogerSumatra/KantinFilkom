<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index() {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function show(Seller $seller) {
        $menus = $seller->menus;
        return view('seller.show', compact('seller', 'menus'));
    }
}
