<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function test()
    {
        return view('web.homepage');
    }

    public function index()
    {
        $toko = 5; // atau logika Anda untuk menentukan jumlah toko
        return view('homepage', compact('toko'));
    }

}
