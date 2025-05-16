@extends('homepage.layout')

@section('title', 'File Download')

@section('content')

<section id="file-download" class="contact">
    <div class="container">
        <!-- Heading Section -->
        <div class="section-title aos-init aos-animate" data-aos="fade-down" data-aos-delay="100">
            <h2>Document</h2>
            <p>File Download</p>
        </div>

        <div class="row">
            <!-- Konten Utama -->
            <div class="col-lg-6">
                <!-- Produk Hukum -->
                <div class="download-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="icon-download">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="download-text">
                        <h4>Produk Hukum</h4>
                        <p><a href="https://drive.google.com/drive/folders/118Zsw1O0LnSpcLMCfKMLAp5427qz_dNC?usp=drive_link">Download</a></p>
                    </div>
                </div>

                <!-- Mars -->
                <div class="download-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-download">
                        <i class="bi bi-bell"></i>
                    </div>
                    <div class="download-text">
                        <h4>Mars</h4>
                        <p><a href="https://drive.google.com/drive/folders/19V6s4nHL5WtwO_3YSahZ61ntHEDtnd64?usp=drive_link">Download</a></p>
                    </div>
                </div>

                <!-- Logo Organisasi -->
                <div class="download-item" data-aos="fade-left" data-aos-delay="300">
                    <div class="icon-download">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="download-text">
                        <h4>Logo Organisasi</h4>
                        <p><a href="https://drive.google.com/drive/folders/1fAlUHOuXnVFknlbCqiMuyDnWZ0sFi8bF?usp=drive_link">Download</a></p>
                    </div>
                </div>

                <!-- Selayang Pandang -->
                <div class="download-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-download">
                        <i class="bi bi-globe2"></i>
                    </div>
                    <div class="download-text">
                        <h4>Selayang Pandang</h4>
                        <p><a href="https://drive.google.com/drive/folders/1JpXXOB-K2mYc7KqY56VtbphjS08ff5fm?usp=drive_link">Download</a></p>
                    </div>
                </div>
            </div>

            <!-- Konten Baru -->
            <div class="col-lg-6">
                <!-- Jurnal -->
                <div class="download-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="icon-download">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="download-text">
                        <h4>Jurnal</h4>
                        <p><a href="#">Download</a></p>
                    </div>
                </div>

                <!-- Artikel -->
                <div class="download-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-download">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="download-text">
                        <h4>Artikel</h4>
                        <p><a href="#">Download</a></p>
                    </div>
                </div>

                <!-- Referensi Tugas Akhir -->
                <div class="download-item" data-aos="fade-left" data-aos-delay="300">
                    <div class="icon-download">
                        <i class="bi bi-journal-bookmark"></i>
                    </div>
                    <div class="download-text">
                        <h4>Referensi Tugas Akhir</h4>
                        <p><a href="#">Download</a></p>
                    </div>
                </div>

                <!-- IMTSI dalam Berita -->
                <div class="download-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-download">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <div class="download-text">
                        <h4>IMTSI dalam Berita</h4>
                        <p><a href="#">Download</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection