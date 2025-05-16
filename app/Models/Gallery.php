<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Tentukan nama tabel menjadi gallery
    protected $table = 'gallery'; 

    protected $fillable = [
        'title',
        'image',
        'category',
    ];

    public $timestamps = true;
}
