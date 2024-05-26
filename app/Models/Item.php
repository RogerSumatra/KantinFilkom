<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'menu_id',
        'quantity',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
