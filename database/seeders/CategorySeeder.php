<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['kategori' => 'Teknologi']);
        Category::create(['kategori' => 'Pendidikan']);
        Category::create(['kategori' => 'Kesehatan']);
    }
}
