<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logotengah.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <title>@yield('title')</title>

    <style>
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logotengah.png') }}" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                        <!-- Dropdown for Profil -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil <i class="bi bi-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profil/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/profil/sejarah">Sejarah</a></li>
                            <li><a class="dropdown-item" href="/profil/logo-arti">Logo & Arti</a></li>
                            <li><a class="dropdown-item" href="/profil/struktur-organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/profil/informasi-pengurus">Informasi Pengurus</a></li>
                            <li><a class="dropdown-item" href="/profil/dewan-pengawas">Dewan Pengawas</a></li>
                            <li><a class="dropdown-item" href="/profil/dewan-pembina">Dewan Pembina</a></li>
                            <li><a class="dropdown-item" href="/profil/demisioner">Demisioner</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bim-imtsi">BIM IMTSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/file-download">File Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    @section('content')
    @show
    <section id="footer">
        <div class="container">
            <div class="row">
                <!-- Logo Section -->
                <div class="col-12 col-md-4 text-center text-md-left mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/logotengah.png') }}" alt="Logo" class="footer-logo">
                </div>

                <!-- Navigation Section -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h4>Explore</h4>
                    <ul class="footer-nav">
                        <li><a href="/" class="footer-link">Beranda</a></li>
                        <li><a href="/profil" class="footer-link">Profil</a></li>
                        <li><a href="/kegiatan" class="footer-link">Kegiatan</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <div class="col-12 col-md-4">
                    <h4>Follow Us</h4>
                    <ul class="footer-nav">
                        <li><a href="https://instagram.com/imtsi_imtsi" class="footer-link">Instagram</a></li>
                        <li><a href="https://youtube.com/@imtsicreative5974" class="footer-link">Youtube</a></li>
                        <li><a href="https://x.com/pp_imtsi" class="footer-link">Twitter</a></li>
                        <li><a href="https://facebook.com/ilmiah.imtsi" class="footer-link">Facebook</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="newsletter text-center">
                <h4>Our Newsletter</h4>
                <p>Dapatkan informasi terbaru dari kami</p>
                <input type="email" placeholder="Enter your email" class="newsletter-input">
                <button class="btn btn-subscribe">Subscribe</button>
            </div>

            <!-- Social Icons -->
            <div class="footer-icons text-center">
                <a href="https://instagram.com/imtsi_imtsi"><i class="fa fa-instagram fa-lg"></i></a>
                <a href="https://facebook.com/ilmiah.imtsi"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="https://youtube.com/@imtsicreative5974"><i class="fa fa-youtube fa-lg"></i></a>
                <a href="https://x.com/pp_imtsi"><i class="fa fa-twitter fa-lg"></i></a>
            </div>

            <!-- Copyright -->
            <p class="copyright text-center">IMTSI © 2025 All rights reserved.</p>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        document.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://use.fontawesome.com/fce448f006.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/filter-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/slider-home.js') }}"></script>
    <script src="{{ asset('assets/js/gallery.js') }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <script>
    AOS.init();
    </script>
</body>

</html>