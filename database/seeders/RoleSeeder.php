<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
            'role_id' => 'Seminar tentang perkembangan teknologi terbaru.',

        ]);
    }
}
