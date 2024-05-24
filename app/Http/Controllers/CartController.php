<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Menu $menu)
    {
        $cart = session()->get('cart', []);
        $cart[$menu->id] = [
            'name' => $menu->name,
            'quantity' => $request->input('quantity', 1),
            'price' => $menu->price,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }
}
