<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function add(Request $request, Menu $menu)
    // {
    //     $cart = session()->get('cart', []);
    //     $cart[$menu->id] = [
    //         'name' => $menu->name,
    //         'quantity' => $request->input('quantity', 1),
    //         'price' => $menu->price,
    //     ];
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Item added to cart');
    // }

    // public function index()
    // {
    //     $cart = session()->get('cart', []);
    //     return view('cart.index', compact('cart'));
    // }

    public function add(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
            'user_id' => 'required|exists:users,id'
        ]);

        // Logika untuk menambahkan item ke keranjang
        try {
            // Misalnya, menambahkan item ke keranjang
            $cart = new Item();
            $cart->menu_id = $request->menu_id;
            $cart->quantity = $request->quantity;
            $cart->user_id = $request->user_id; // Simpan user_id
            $cart->save();

            return response()->json(['message' => 'Item berhasil ditambahkan ke keranjang']);
        } catch (\Exception $e) {
            // Log error untuk debugging
            \Log::error($e->getMessage());
            return response()->json(['message' => 'Gagal menambahkan ke keranjang'], 500);
        }
    }

    public function getCartItems()
    {
        $items = Item::where('user_id', Auth::id())->with('menu')->get();

        return response()->json(['items' => $items], 200);
    }

    public function updateCartItem(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $item = Item::where('user_id', Auth::id())->findOrFail($id);
        $item->update(['quantity' => $request->quantity]);

        return response()->json(['message' => 'Item updated', 'item' => $item], 200);
    }

    public function removeCartItem($id)
    {
        $item = Item::where('user_id', Auth::id())->findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item removed'], 200);
    }
    
}
