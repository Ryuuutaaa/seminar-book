<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['nama_seminar', 'id_category', 'narasumber', 'deskripsi', 'jumlah_kursi'];
}
