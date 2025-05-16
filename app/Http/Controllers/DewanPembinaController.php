<?php

namespace App\Http\Controllers;

use App\Models\DewanPembina;
use Illuminate\Http\Request;

class DewanPembinaController extends Controller
{
    public function index()
    {
        // Ambil semua data Dewan Pembina dari database
        $pembina = DewanPembina::all();

        return view('profil.dewan-pembina', compact('pembina'));
    }
}
