<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'pengurus'; // Sesuaikan nama tabel Anda

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];

    public $timestamps = true;
}

