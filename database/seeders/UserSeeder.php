<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456789'),
                'no_hp' => '123123123123',
                'role' => 'Admin',
            ],
            [
                'nama' => 'Customer',
                'email' => 'customer@customer.com',
                'password' => Hash::make('123456789'),
                'no_hp' => '123123',
                'role' => 'Customer',
            ]
        ];

        DB::table('users')->insert($users);
    }
}
