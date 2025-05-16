<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DewanPembina;

class DewanPembinaSeeder extends Seeder
{
    public function run()
    {
        DewanPembina::create([
            'nama' => 'Ahmad Fauzi',
            'jabatan' => 'Ketua Dewan Pengawas',
            'foto' => 'assets/img/pengurus/ahmad_fauzi.jpg', // Gambar sesuai folder
        ]);

        DewanPembina::create([
            'nama' => 'Siti Aisyah',
            'jabatan' => 'Sekretaris Dewan Pengawas',
            'foto' => 'assets/img/pengurus/siti_aisyah.jpg',
        ]);
        
        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
