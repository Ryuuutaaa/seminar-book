<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['nama_category' => 'Teknologi']);
        Category::create(['nama_category' => 'Pendidikan']);
        Category::create(['nama_category' => 'Kesehatan']);
    }
}
