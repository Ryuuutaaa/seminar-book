<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $fillable = [
        'user_id',
        'seminar_id',
        'kursi',
        'status',
    ];

    public function seminar()
    {
        return $this->belongsTo(Seminar::class, 'seminar_id');
    }
}
