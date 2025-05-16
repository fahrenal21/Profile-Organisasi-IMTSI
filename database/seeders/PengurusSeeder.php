<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan beberapa data pengurus contoh ke dalam tabel pengurus
        Pengurus::create([
            'nama' => 'Ahmad Fauzi',
            'jabatan' => 'Ketua Umum',
            'foto' => 'path/to/ahmad_fauzi.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Siti Aisyah',
            'jabatan' => 'Sekretaris Umum',
            'foto' => 'path/to/siti_aisyah.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Ali Hidayat',
            'jabatan' => 'Bendahara Umum',
            'foto' => 'path/to/ali_hidayat.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Nurul Hasanah',
            'jabatan' => 'Koordinator Pendidikan',
            'foto' => 'path/to/nurul_hasanah.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Budi Santoso',
            'jabatan' => 'Wakil Ketua Umum',
            'foto' => 'path/to/budi_santoso.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Aulia Ramadhan',
            'jabatan' => 'Sekretaris Umum',
            'foto' => 'path/to/aulia_ramadhan.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Dian Purnama',
            'jabatan' => 'Bendahara Umum',
            'foto' => 'path/to/dian_purnama.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Fajar Setiawan',
            'jabatan' => 'Koordinator Pendidikan',
            'foto' => 'path/to/fajar_setiawan.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Rina Kartika',
            'jabatan' => 'Ketua Umum',
            'foto' => 'path/to/rina_kartika.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Citra Dewi',
            'jabatan' => 'Sekretaris Umum',
            'foto' => 'path/to/citra_dewi.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Reza Maulana',
            'jabatan' => 'Bendahara Umum',
            'foto' => 'path/to/reza_maulana.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Indra Wijaya',
            'jabatan' => 'Koordinator Pendidikan',
            'foto' => 'path/to/indra_wijaya.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Hilda Sari',
            'jabatan' => 'Wakil Ketua Umum',
            'foto' => 'path/to/hilda_sari.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Marya Anggraini',
            'jabatan' => 'Sekretaris Umum',
            'foto' => 'path/to/marya_anggraini.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Eko Wibowo',
            'jabatan' => 'Bendahara Umum',
            'foto' => 'path/to/eko_wibowo.jpg',
        ]);

        Pengurus::create([
            'nama' => 'Yuni Pratiwi',
            'jabatan' => 'Koordinator Pendidikan',
            'foto' => 'path/to/yuni_pratiwi.jpg',
        ]);

        // Anda bisa menambahkan lebih banyak data jika diperlukan
    }
}
