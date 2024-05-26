<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transactions = History::where('user_id', $user->id)
                                    ->where('status', 'confirmed')
                                    ->with(['menu', 'menu.seller'])
                                    ->get();

        return view('web.history', compact('transactions'));
    }
}

