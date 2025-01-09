<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika menggunakan nama tabel default Laravel 'roles')
    protected $table = 'roles';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = ['role'];
}
