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
            'tanggal_seminar' => '2025-09-11',
            'image' => 'seminars/s1.png',
        ]);

        Seminar::create([
            'nama_seminar' => 'Seminar Pendidikan 2025',
            'kategori_id' => 2,
            'narasumber' => 'Prof. Jane Smith',
            'deskripsi' => 'Seminar tentang pendidikan di era digital.',
            'jumlah_kursi' => 150,
            'tanggal_seminar' => '2025-09-24',
            'image' => 'seminars/s2.png',
        ]);

        Seminar::create([
            'nama_seminar' => 'Seminar masyarakat 2025',
            'kategori_id' => 3,
            'narasumber' => 'Erin sewith',
            'deskripsi' => 'Globallisasi.',
            'jumlah_kursi' => 130,
            'tanggal_seminar' => '2022-04-24',
            'image' => 'seminars/s3.png',
        ]);
    }
}
