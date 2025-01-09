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
            'id_category' => 1, // ID kategori yang sesuai
            'narasumber' => 'Dr. John Doe',
            'deskripsi' => 'Seminar tentang perkembangan teknologi terbaru.',
            'jumlah_kursi' => 100
        ]);

        Seminar::create([
            'nama_seminar' => 'Seminar Pendidikan 2025',
            'id_category' => 2, // ID kategori yang sesuai
            'narasumber' => 'Prof. Jane Smith',
            'deskripsi' => 'Seminar tentang pendidikan di era digital.',
            'jumlah_kursi' => 150
        ]);
    }
}
