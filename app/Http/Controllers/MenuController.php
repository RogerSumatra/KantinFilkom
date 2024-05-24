<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function search(Request $request) {
        $query = $request->input('query');
        $menus = Menu::where('name', 'like', "%{$query}%")->get();
        return view('menus.search', compact('menus'));
    }
}
