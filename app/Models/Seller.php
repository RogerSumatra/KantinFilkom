<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_toko', 
        'jam_buka', 
        'picture', 
    ];

    //relasi ke user tipe penjual
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
