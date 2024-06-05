<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    // public function index() {
    //     $sellers = Seller::all();
    //     return view('sellers.index', compact('sellers'));
    // }

    // public function show(Seller $seller) {
    //     $menus = $seller->menus;
    //     return view('seller.show', compact('seller', 'menus'));
    // }

    public function dashboard()
    {
        $seller = Auth::user()->seller;
        return view('seller.dashboard', compact('seller'));
    }

    public function update(Request $request)
    {
        $seller = Auth::user()->seller;

        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $seller->update($request->all());

        return redirect()->route('seller.dashboard')->with('success', 'Informasi toko berhasil diperbarui');
    }

    public function updatePhoto(Request $request)
    {
        $seller = Auth::user()->seller;

        if ($request->hasFile('fileUpload')) {
            // Mendapatkan file yang diunggah
            $file = $request->file('fileUpload');

            // Menyimpan file ke direktori 'public/seller_images'
            $path = $file->store('public/seller_images');

            // Menghapus 'public/' dari jalur yang disimpan
            $path = str_replace('public/', '', $path);

            // Perbarui path gambar di database
            $seller->picture = $path;
            $seller->save();
        }

        return redirect()->route('dashboard');
    }
}
