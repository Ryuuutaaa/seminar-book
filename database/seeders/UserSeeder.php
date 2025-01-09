<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
            'role_id' => 0

        ]);

        User::create([
            'name' => 'peserta',
            'email' => "peserta@gmail.com",
            'password' => Hash::make('password'),
            'role_id' => 1,

        ]);
    }
}
