<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = [
            [
                'nama_toko' => 'Toko Sumber Rejeki',
                'jam_buka' => '08:00 - 20:00',
                'picture' => 'seller_images/nasgor.jpg'
            ],
            [
                'nama_toko' => 'Toko Makmur Jaya',
                'jam_buka' => '09:00 - 21:00',
                'picture' => 'seller_images/bakso.jpeg'
            ],
            [
                'nama_toko' => 'Toko Serba Ada',
                'jam_buka' => '07:00 - 22:00',
                'picture' => 'seller_images/warteg1.jpg'
            ],
            [
                'nama_toko' => 'Toko Keluarga',
                'jam_buka' => '10:00 - 18:00',
                'picture' => 'seller_images/warteg2.jpg'
            ],
            [
                'nama_toko' => 'Toko Maju Bersama',
                'jam_buka' => '06:00 - 23:00',
                'picture' => 'seller_images/warteg3.jpg'
            ]
        ];


        foreach ($sellers as $seller) {
            // Copy file ke storage
            Storage::put('public/' . $seller['image'], file_get_contents(database_path('seeders/images/' . basename($seller['image']))));

            // Simpan ke database
            Seller::create([
                'nama_toko' => $seller['nama_toko'],
                'jam_buka' => $seller['jam_buka'],
                'picture' => $seller['picture'],
                // Tambahkan atribut lain sesuai kebutuhan
            ]);
        }
    }
}
