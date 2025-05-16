@extends('homepage.layout')
@section('title', 'Building Information Modeling (BIM)')
@section('content')

<!-- Full-Page Banner -->
<section id="bim-banner">
    <div class="bim-banner">
    </div>
</section>

<!-- BIM Details -->
<section id="bim-details" class="py-5">
    <div class="container">
        <div class="row">
            <!-- Penjelasan BIM -->
            <div class="col-md-12 mb-4">
                <h2 class="fw-bold text-center mb-5">Apa Itu BIM?</h2>
                <p class="text-justify">
                    Building Information Modeling (BIM) merupakan sebuah proses untuk mengelola data konstruksi dengan menggunakan teknologi berupa software komputer yang memanfaatkan sistem database (data-oriented software).
                </p>
                <p class="text-justify">
                    Tujuan dari BIM adalah untuk meningkatkan efisiensi pekerjaan dari seorang arsitek, insinyur, dan juga kontraktor dalam merencanakan, mendesain, membangun, mengoperasikan, dan juga memelihara suatu konstruksi.
                </p>
                <p class="text-justify">
                    Seringkali disalah pahami sebagai aplikasi model 3D pada umumnya, teknologi BIM pada saat ini dapat merangkum 5 tipe data tambahan, membuat BIM menjadi software 8D.
                    Setiap dimensi tidak menyatakan atau berkaitan terhadap hukum fisika, akan tetapi menyatakan tipe informasi/data yang disediakan Software BIM tersebut.
                </p>
            </div>

            <!-- Sejarah BIM -->
        <div class="container">
        <h2 class="fw-bold text-center mb-5">Sejarah BIM</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-6 col-md-12" data-aos="fade-down">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex">
                        <div class="icon me-3">
                            <i class="bi bi-calendar-event display-4 text-primary"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold">1962: Konsep Dasar BIM</h5>
                            <p class="card-text">
                                Douglas Carl Englebart mengembangkan konsep dasar BIM untuk mempermudah kolaborasi antara arsitek, insinyur, kontraktor, dan departemen lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-6 col-md-12" data-aos="fade-down">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex">
                        <div class="icon me-3">
                            <i class="bi bi-cpu display-4 text-warning"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold">1974: Building Description System</h5>
                            <p class="card-text">
                                Building Description System (BDS) menjadi perangkat lunak pertama yang mendeskripsikan elemen bangunan dan menyimpan data modelnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-6 col-md-12" data-aos="fade-down">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex">
                        <div class="icon me-3">
                            <i class="bi bi-diagram-3 display-4 text-success"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold">1995: International Foundation Class (IFC)</h5>
                            <p class="card-text">
                                Format IFC dibentuk untuk meningkatkan efisiensi dengan menyatukan format data antar perangkat lunak BIM yang berbeda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-6 col-md-12" data-aos="fade-down">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex">
                        <div class="icon me-3">
                            <i class="bi bi-people display-4 text-danger"></i>
                        </div>
                        <div>
                            <h5 class="card-title fw-bold">2004: Kolaborasi dalam Revit</h5>
                            <p class="card-text">
                                Revit 6 memperkenalkan fitur kolaborasi (Worksets), mempermudah koordinasi antar departemen dalam suatu proyek konstruksi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>

<section id="visi-misi">
    <div class="container">
        <div class="row">
            <!-- Kolom Visi -->
            <div class="col-12 col-md-6" data-aos="fade-right">
                <h1 class="section-title">Visi</h1>
                <p class="section-text">
                    <b>Visi BIM IMTSI:</b>
                </p>
                <p class="section-text text-justify">
                    Menjadi Wadah Dan Badan Organisasi Kemahasiswaan Terdepan Dalam Mengembangkan Dan Melebarkan Sayap Informasi Terkait Teknologi Bim Bagi Mahasiswa Teknik Sipil Seluruh Indonesia.
                </p>
            </div>
            <!-- Kolom Misi -->
            <div class="col-12 col-md-6" data-aos="fade-left">
                <h1 class="section-title">Misi</h1>
                <p class="section-text">
                    <b>Misi BIM IMTSI:</b>
                </p>
                <ul class="list-unstyled">
                    <li>Memperluas Jaringan Di Tiap - Tiap Cabang Tim Bim Imtsi Dan Menjadi Jembatan Pengembangan Potensi Mahasiswa Teknik Sipil Indonesia Melalui Pelatihan Software BIM.</li>
                    <li>Menghadirkan Berbagai Bentuk Eksposur Dari Berbagai Ahli Dalam Bidang Teknik Sipil Untuk Menjadi Anggota Tim Bim Imtsi Yang Kritis, Kreatif, Dan Inovatif Dalam Penggunaan Dan Penerapan Teknologi Bim Di Dunia Konstruksi.</li>
                    <li>Menjalin Hubungan Dan Kerja Sama Dengan Instansi Atau Lembaga Terkait Untuk Saling Menyokong Teknologi Bim Sebagai Kebutuhan Dalam Sektor Konstruksi Seraya Menuju Revolusi Industri 4.0.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Dokumentasi -->
<section id="bim-gallery" class="py-5 bg-light">
    <div class="container text-center" data-aos="fade-left">
        <h2 class="fw-bold mb-4">Dokumentasi Kegiatan</h2>
        <div class="row">
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/4.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4"data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/5.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4"data-aos="fade-left">
                <img src="{{ asset('assets/img/bim/6.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
        </div>
    </div>
</section>

<!-- Dokumentasi -->
<section id="bim-gallery" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" data-aos="fade-right">Penghargaan BIM IMTSI</h2>
        <div class="row">
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/11.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/12.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/13.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/14.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/15.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
            <!-- Foto Dump -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/bim/16.jpg') }}" class="img-fluid rounded shadow-sm" alt="Dokumentasi">
            </div>
        </div>
    </div>
</section>

<section id="bim-gallery" class="py-5 bg-light">
    <div class="container text-center" data-aos="fade-down">
        <h2 class="fw-bold mb-4">Video BIM Award</h2>
        <div class="row">
            <!-- Video Player Card 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <div class="ratio ratio-16x9">
                    <video src="{{ asset('assets/img/bim/vid1.mp4') }}" 
                    title="Video Player 1" 
                    controls>
                    </video>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Tekla Global BIM Awards 2022</h5>
                    <p class="card-text">Aquatic Of Nusantara</p>
                    </div>
                </div>
            </div>
            <!-- Video Player Card 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <div class="ratio ratio-16x9">
                    <video src="{{ asset('assets/img/bim/vid2.mp4') }}" 
                    title="Video Player 2" 
                    controls>
                    </video>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Tekla Global BIM Awards 2022</h5>
                    <p class="card-text">Aquatic Of Nusantara</p>
                    </div>
                </div>
            </div>
            <!-- Video Player Card 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <div class="ratio ratio-16x9">
                    <video src="{{ asset('assets/img/bim/vid3.mp4') }}" 
                    title="Video Player 3" 
                    controls>
                    </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tekla Global BIM Awards 2022</h5>
                        <p class="card-text">Aquatic Of Nusantara</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection