@extends('homepage.layout')
@section('title','IMTSI | Ikatan Mahasiswa Teknik Sipil Indonesia')
@section('content')
<section id="banner">
    <div class="banner">
        <div class="container">
            <div class="row align-items-center">
                <!-- Bagian Kiri: Heading, Paragraf, dan Button -->
                <div class="col-md-6" data-aos="fade-right">
                    <h1 class="title display-4">Ikatan Mahasiswa Teknik Sipil Indonesia</h1>
                    <p class="lead mt-4">
                        Lahir atas dasar rasa kesadaran yang sama dari mahasiswa/i teknik sipil dari beberapa institusi 
                        dan daerah yang ada di tanah air, bahwa mahasiswa sebagai basis intelektual harus mampu meningkatkan 
                        kualitas dan kapabilitasnya.
                    </p>
                    <a href="https://wa.me/6281586753086" target="_blank" 
                       class="btn btn-lg btn-warning shadow-lg px-4 py-2 mt-3">
                        Join Us
                    </a>
                </div>
                <!-- Bagian Kanan: Carousel -->
                <div class="col-md-6" data-aos="fade-left">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow-lg">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" 
                                     class="d-block w-100 img-fluid" 
                                     alt="Image 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Proyek Teknik Sipil Modern</h5>
                                    <p>Melibatkan mahasiswa dalam inovasi infrastruktur.</p>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" 
                                     class="d-block w-100 img-fluid" 
                                     alt="Image 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kegiatan Sosial</h5>
                                    <p>Memberikan kontribusi nyata kepada masyarakat.</p>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" 
                                     class="d-block w-100 img-fluid" 
                                     alt="Image 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Kolaborasi Nasional</h5>
                                    <p>Bersama membangun masa depan teknik sipil Indonesia.</p>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" 
                                     class="d-block w-100 img-fluid" 
                                     alt="Image 4">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Pelatihan Profesional</h5>
                                    <p>Program pengembangan kapasitas mahasiswa teknik sipil.</p>
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" 
                                     class="d-block w-100 img-fluid" 
                                     alt="Image 5">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ekspedisi Teknik</h5>
                                    <p>Menghadirkan pengalaman eksplorasi lapangan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Sebelumnya -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                            <i class="bi bi-chevron-left" aria-hidden="true"></i>
                        </button>
                        <!-- Tombol Berikutnya -->
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="details">
    <div class="container" data-aos="fade-down">
        <div class="row">
        <h1>#IMTSIjaya</h1>
        <div class=""><p>Globalisasi dan perkembangan teknologi yang pesat di Asia dan dunia memaksa mahasiswa/i Indoneisa untuk terus memacu daya saing melalui peningkatan wawasan, pengetahuan dan skill dalam suasana kekeluargaan.
        </p></div>
        <div class="card" style="width: 25rem;">
        <img src="{{ asset('assets/img/student.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">17.000</h4>
              <p class="card-text">Anggota</p>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="{{ asset('assets/img/school.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">114</h4>
              <p class="card-text">Institusi</p>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="{{ asset('assets/img/map.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">10</h4>
              <p class="card-text">Wilayah</p>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection