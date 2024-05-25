<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'nama_toko' => 'Toko Sumber Rejeki',
            'jam_buka' => '08:00 - 20:00',
            'picture' => 'img/HomepageTop.png',
        ]);

        Seller::create([
            'nama_toko' => 'Toko Makmur Jaya',
            'jam_buka' => '09:00 - 21:00',
            'picture' => 'img/HomepageTop.png',
        ]);

        Seller::create([
            'nama_toko' => 'Toko Serba Ada',
            'jam_buka' => '07:00 - 22:00',
            'picture' => 'img/HomepageTop.png',
        ]);

        Seller::create([
            'nama_toko' => 'Toko Keluarga',
            'jam_buka' => '10:00 - 18:00',
            'picture' => 'img/HomepageTop.png',
        ]);

        Seller::create([
            'nama_toko' => 'Toko Maju Bersama',
            'jam_buka' => '06:00 - 23:00',
            'picture' => 'img/HomepageTop.png',
        ]);
    }
}
