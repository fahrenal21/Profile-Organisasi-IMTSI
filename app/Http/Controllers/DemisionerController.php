<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;  // Pastikan menggunakan model Demisioner
use Illuminate\Http\Request;

class DemisionerController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $demisioner = Demisioner::all();

        return view('profil.demisioner', compact('demisioner'));
    }
}
