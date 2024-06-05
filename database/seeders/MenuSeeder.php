<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'seller_id' => 1,
                'menus_name' => 'Nasi Goreng',
                'types' => 'Makanan',
                'price' => 20000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 1,
                'menus_name' => 'Mie Goreng',
                'types' => 'Makanan',
                'price' => 18000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 2,
                'menus_name' => 'Es Teh Manis',
                'types' => 'Minuman',
                'price' => 5000.00,
                'images' => 'seller_images/Drink.jpg',
            ],
            [
                'seller_id' => 2,
                'menus_name' => 'Kopi Hitam',
                'types' => 'Minuman',
                'price' => 10000.00,
                'images' => 'seller_images/Drink.jpg',
            ],
            [
                'seller_id' => 3,
                'menus_name' => 'Ayam Bakar',
                'types' => 'Makanan',
                'price' => 25000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 3,
                'menus_name' => 'Jus Alpukat',
                'types' => 'Minuman',
                'price' => 20000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 4,
                'menus_name' => 'Roti Bakar',
                'types' => 'Makanan',
                'price' => 12000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 4,
                'menus_name' => 'Teh Tarik',
                'types' => 'Minuman',
                'price' => 7000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 5,
                'menus_name' => 'Sate Ayam',
                'types' => 'Makanan',
                'price' => 30000.00,
                'images' => 'seller_images/Food.jpg',
            ],
            [
                'seller_id' => 5,
                'menus_name' => 'Soto Ayam',
                'types' => 'Makanan',
                'price' => 22000.00,
                'images' => 'img/Food.jpg',
            ]
        ];

        foreach ($menus as $menu) {
            // Copy file ke storage
            Storage::put('public/' . $menu['image'], file_get_contents(database_path('seeders/images/' . basename($menu['image']))));

            // Simpan ke database
            Menu::create([
                'seller_id' => $menu['seller_id'],
                'menus_name' => $menu['menus_name'],
                'types' => $menu['types'],
                'price' => $menu['price'],
                'images' => $menu['images']
                // Tambahkan atribut lain sesuai kebutuhan
            ]);
        }
    }
}
