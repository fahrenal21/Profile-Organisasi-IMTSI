<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demisioner extends Model
{
    use HasFactory;

    protected $table = 'demisioner';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
        'periode',
    ];

    public $timestamps = true;
}
