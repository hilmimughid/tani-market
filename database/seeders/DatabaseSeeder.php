<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'no_hp' => '123123123123',
            'role' => 'Admin',
        ]);

        User::create([
            'nama' => 'Customer',
            'email' => 'customer@customer.com',
            'password' => Hash::make('123456789'),
            'no_hp' => '123123',
            'role' => 'Customer',
        ]);
    }
}
