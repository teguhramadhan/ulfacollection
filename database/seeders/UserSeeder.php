<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ulfacollection.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Customer user
        User::create([
            'name' => 'Teguh Ramadhan',
            'email' => 'teguhthuv@gmail.com',
            'password' => Hash::make('teguh007'),
            'role' => 'customer',
        ]);
    }
}
