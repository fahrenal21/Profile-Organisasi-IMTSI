<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DewanPembina extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'dewan_pembina'; 

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];

    public $timestamps = true;
}
