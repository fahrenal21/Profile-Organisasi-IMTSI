<?php

namespace App\Http\Controllers;

use App\Models\DewanPengawas;
use Illuminate\Http\Request;

class DewanPengawasController extends Controller
{
    public function index()
    {
        // Ambil data Dewan Pengawas dari database
        $pengawas = DewanPengawas::all(); // Mengambil semua data pengawas

        return view('profil.dewan-pengawas', compact('pengawas')); // Mengirim data ke view
    }
}
