<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;  // Import model Pengurus
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        // Mengambil data pengurus dari tabel pengurus
        $pengurus = Pengurus::all();  // Mengambil seluruh data dari tabel pengurus

        return view('profil.informasi-pengurus', compact('pengurus'));
    }
}
