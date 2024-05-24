<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
<<<<<<< HEAD
    public function test(){
        return view('welcome');
=======
    public function test()
    {
        return view('web.homepage');
    }

    public function index()
    {
        $toko = 5; // atau logika Anda untuk menentukan jumlah toko
        return view('homepage', compact('toko'));
>>>>>>> 099c1248c5dcaa491a02904777026c6ec4d94490
    }

}
