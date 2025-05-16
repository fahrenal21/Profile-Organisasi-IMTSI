<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DewanPengawas;

class DewanPengawasSeeder extends Seeder
{
    public function run()
    {
        DewanPengawas::create([
            'nama' => 'Ahmad Fauzi',
            'jabatan' => 'Ketua Dewan Pengawas',
            'foto' => 'assets/img/pengurus/ahmad_fauzi.jpg', // Gambar sesuai folder
        ]);

        DewanPengawas::create([
            'nama' => 'Siti Aisyah',
            'jabatan' => 'Sekretaris Dewan Pengawas',
            'foto' => 'assets/img/pengurus/siti_aisyah.jpg',
        ]);
        
        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
