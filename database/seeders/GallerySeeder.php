<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run()
    {

        $galleries = [
            ['title' => 'Pembangunan Gedung di Jawa Tengah', 'image' => 'assets/img/teaser.jpg', 'category' => 'kongres-1'],
            ['title' => 'Analisa Ketahanan Gedung Pencakar Langit', 'image' => 'assets/img/teaser1.jpg', 'category' => 'kongres-2'],
            ['title' => 'Pengabdian Masyarakat di Tangerang', 'image' => 'assets/img/teaser2.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pembangunan Infrastruktur di Jakarta', 'image' => 'assets/img/teaser3.jpg', 'category' => 'kongres-1'],
            ['title' => 'Konferensi Teknologi di Bali', 'image' => 'assets/img/teaser4.jpg', 'category' => 'kongres-2'],
            ['title' => 'Pelatihan Kepemimpinan di Surabaya', 'image' => 'assets/img/teaser5.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pembangunan Rumah Sakit di Medan', 'image' => 'assets/img/teaser6.jpg', 'category' => 'kongres-1'],
            ['title' => 'Studi Kasus Pembangunan Gedung Perkantoran', 'image' => 'assets/img/teaser7.jpg', 'category' => 'kongres-2'],
            ['title' => 'Penyuluhan Lingkungan di Bandung', 'image' => 'assets/img/teaser8.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pendidikan Anak di Daerah Terpencil', 'image' => 'assets/img/teaser9.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pembangunan Transportasi di Jakarta Barat', 'image' => 'assets/img/teaser10.jpg', 'category' => 'kongres-2'],
            ['title' => 'Sosialisasi Teknologi Pertanian di Yogyakarta', 'image' => 'assets/img/teaser11.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pelatihan Pemrograman di Bali', 'image' => 'assets/img/teaser12.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pameran Industri di Surabaya', 'image' => 'assets/img/teaser13.jpg', 'category' => 'kongres-2'],
            ['title' => 'Konferensi Pendidikan di Malang', 'image' => 'assets/img/teaser14.jpg', 'category' => 'kongres-3'],
            ['title' => 'Inovasi Pertanian di Jambi', 'image' => 'assets/img/teaser15.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pembangunan Infrastruktur di Sumatera', 'image' => 'assets/img/teaser16.jpg', 'category' => 'kongres-2'],
            ['title' => 'Penghijauan Kota Jakarta', 'image' => 'assets/img/teaser17.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pengembangan Sistem Informasi di Bali', 'image' => 'assets/img/teaser18.jpg', 'category' => 'kongres-1'],
            ['title' => 'Studi Kasus Gedung Perkantoran Baru', 'image' => 'assets/img/teaser19.jpg', 'category' => 'kongres-2'],
            ['title' => 'Pelatihan Manajemen Proyek di Bandung', 'image' => 'assets/img/teaser20.jpg', 'category' => 'kongres-3'],
            ['title' => 'Perkembangan Teknologi di Jakarta', 'image' => 'assets/img/teaser21.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pembangunan Pusat Data di Surabaya', 'image' => 'assets/img/teaser22.jpg', 'category' => 'kongres-2'],
            ['title' => 'Workshop Pemrograman di Yogyakarta', 'image' => 'assets/img/teaser23.jpg', 'category' => 'kongres-3'],
            ['title' => 'Inovasi Teknologi di Sumatera', 'image' => 'assets/img/teaser24.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pembangunan Kampus Baru di Jakarta', 'image' => 'assets/img/teaser25.jpg', 'category' => 'kongres-2'],
            ['title' => 'Studi Kasus Proyek Pembangunan di Bali', 'image' => 'assets/img/teaser26.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pelatihan Pembangunan Infrastruktur di Malang', 'image' => 'assets/img/teaser27.jpg', 'category' => 'kongres-1'],
            ['title' => 'Konferensi Lingkungan di Yogyakarta', 'image' => 'assets/img/teaser28.jpg', 'category' => 'kongres-2'],
            ['title' => 'Workshop Pemrograman di Surabaya', 'image' => 'assets/img/teaser29.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pembangunan Gedung di Bandung', 'image' => 'assets/img/teaser30.jpg', 'category' => 'kongres-1'],
            ['title' => 'Studi Kasus Digitalisasi di Jakarta', 'image' => 'assets/img/teaser31.jpg', 'category' => 'kongres-2'],
            ['title' => 'Penyuluhan Teknologi Pertanian di Bali', 'image' => 'assets/img/teaser32.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pengembangan Infrastruktur di Surabaya', 'image' => 'assets/img/teaser33.jpg', 'category' => 'kongres-1'],
            ['title' => 'Konferensi Perencanaan Kota di Malang', 'image' => 'assets/img/teaser34.jpg', 'category' => 'kongres-2'],
            ['title' => 'Inovasi Digital di Yogyakarta', 'image' => 'assets/img/teaser35.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pembangunan Jembatan di Jakarta', 'image' => 'assets/img/teaser36.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pelatihan Kepemimpinan di Bali', 'image' => 'assets/img/teaser37.jpg', 'category' => 'kongres-2'],
            ['title' => 'Workshop Teknologi Terbaru di Malang', 'image' => 'assets/img/teaser38.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pameran Teknologi di Surabaya', 'image' => 'assets/img/teaser39.jpg', 'category' => 'kongres-1'],
            ['title' => 'Studi Kasus Keberlanjutan di Yogyakarta', 'image' => 'assets/img/teaser40.jpg', 'category' => 'kongres-2'],
            ['title' => 'Pembangunan Kampus Teknologi di Bali', 'image' => 'assets/img/teaser41.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pengembangan Sistem Informasi di Jakarta', 'image' => 'assets/img/teaser42.jpg', 'category' => 'kongres-1'],
            ['title' => 'Inovasi Teknologi di Malang', 'image' => 'assets/img/teaser43.jpg', 'category' => 'kongres-2'],
            ['title' => 'Pembangunan Kampus Digital di Yogyakarta', 'image' => 'assets/img/teaser44.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pelatihan Pembangunan Kota di Surabaya', 'image' => 'assets/img/teaser45.jpg', 'category' => 'kongres-1'],
            ['title' => 'Studi Kasus Infrastruktur Terpadu di Bali', 'image' => 'assets/img/teaser46.jpg', 'category' => 'kongres-2'],
            ['title' => 'Workshop Digital Marketing di Jakarta', 'image' => 'assets/img/teaser47.jpg', 'category' => 'kongres-3'],
            ['title' => 'Pembangunan Pusat Komunikasi di Yogyakarta', 'image' => 'assets/img/teaser48.jpg', 'category' => 'kongres-1'],
            ['title' => 'Pengabdian Masyarakat di Sumatera', 'image' => 'assets/img/teaser49.jpg', 'category' => 'kongres-2'],
        ];


        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
