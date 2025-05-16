<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data gallery yang dipaginasi dengan 9 item per halaman
        $gallery = Gallery::paginate(9); // 9 data per halaman

        return view('homepage.gallery', compact('gallery'));
    }
}
