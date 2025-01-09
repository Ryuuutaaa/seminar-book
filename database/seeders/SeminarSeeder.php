<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seminar;

class SeminarSeeder extends Seeder
{
    public function run()
    {
        Seminar::create([
            'nama_seminar' => 'Seminar Teknologi 2025',
            'kategori_id' => 1,
            'narasumber' => 'Dr. John Doe',
            'deskripsi' => 'Seminar tentang perkembangan teknologi terbaru.',
            'jumlah_kursi' => 100,
            "image" => "https://unsplash.com/photos/person-diving-on-pool-splashing-water-1qCSGzVEKKQ",

        ]);

        Seminar::create([
            'nama_seminar' => 'Seminar Pendidikan 2025',
            'kategori_id' => 2,
            'narasumber' => 'Prof. Jane Smith',
            'deskripsi' => 'Seminar tentang pendidikan di era digital.',
            'jumlah_kursi' => 150,
            'image' => "https://unsplash.com/photos/person-diving-on-pool-splashing-water-1qCSGzVEKKQ",
        ]);
    }
}
