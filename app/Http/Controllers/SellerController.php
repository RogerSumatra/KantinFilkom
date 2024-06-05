<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Menu;
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

    // public function update(Request $request)
    // {
    //     $seller = Auth::user()->seller;

    //     $request->validate([
    //         'nama_toko' => 'required|string|max:255',
    //         'alamat' => 'required|string|max:255',
    //         'deskripsi' => 'nullable|string',
    //     ]);

    //     $seller->update($request->all());

    //     return redirect()->route('seller.dashboard')->with('success', 'Informasi toko berhasil diperbarui');
    // }

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

    public function updateTime(Request $request)
    {
        $request->validate([
            'jam_buka' => 'required|date_format:H:i',
            'jam_tutup' => 'required|date_format:H:i',
        ]);

        $seller = Seller::where('user_id', Auth::id())->first();
        $seller->jam_buka = $request->jam_buka . ' - ' . $request->jam_tutup;
        $seller->save();

        return redirect()->route('dashboard')->with('success', 'Jam operasional berhasil diperbarui');
    }

    public function addMenu(Request $request)
    {
        // Validasi input dari form tambah menu
        $request->validate([
            'menus_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'types' => 'required|in:Makanan,Minuman',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // Mendapatkan file yang diunggah
        $file = $request->file('images');

        // Menyimpan file ke direktori 'public/seller_images'
        $imagesPath = $file->store('public/seller_images');

        // Menghapus 'public/' dari jalur yang disimpan
        $imagesPath = str_replace('public/', '', $imagesPath);

        //Ambil seller id agar sama
        $id = Auth::id();
        $seller = Seller::where('user_id', $id)->first();


        // Buat menu baru
        Menu::create([
            'menus_name' => $request->menus_name,
            'price' => $request->price,
            'types' => $request->types,
            'images' => $imagesPath,
            'seller_id' => $seller->id,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard');
    }
}
