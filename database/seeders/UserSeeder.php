<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Customer 1',
                'email' => 'customer@mail.com',
                'password' => Hash::make('password'),
                'nik' => '923493204',
                'role' => 'customer'
            ],
            [
                'name' => 'Mitra 1',
                'email' => 'mitra@mail.com',
                'password' => Hash::make('password'),
                'nik' => '903483249004',
                'role' => 'mitra'
            ]
        ]);
    }
}
