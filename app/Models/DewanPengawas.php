<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DewanPengawas extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default
    protected $table = 'dewan_pengawas';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];

    // Tentukan timestamps
    public $timestamps = true;
}
