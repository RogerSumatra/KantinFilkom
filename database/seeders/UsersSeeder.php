<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Tester',
            'last_name' => '123',
            'email' => 'tester123@example.com',
            'password' => Hash::make('tester123'),
        ]);

        User::create([
            'first_name' => 'Ujang',
            'last_name' => 'Supardi',
            'email' => 'ujangsupardi@example.com',
            'password' => Hash::make('ujangsupardi'),
        ]);
    }
}
