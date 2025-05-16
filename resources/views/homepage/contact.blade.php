@extends('homepage.layout')

@section('title', 'Contact')

@section('content')

<section id="contact" class="contact">
    <div class="container">
        <!-- Bagian Judul -->
        <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <div class="info">
                    <!-- Lokasi -->
                    <div class="address download-item">
                        <div class="icon-download">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="download-text">
                            <h4>Location:</h4>
                            <p>Jl. Meruya Selatan No.1, Kembangan, Jakarta Barat, DKI Jakarta, 11620</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="email download-item">
                        <div class="icon-download">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="download-text">
                            <h4>Email:</h4>
                            <p><a href="mailto:sekretariat.imtsi@gmail.com">sekretariat.imtsi@gmail.com</a></p>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="phone download-item">
                        <div class="icon-download">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="download-text">
                            <h4>Call:</h4>
                            <p><a href="https://wa.me/6281586753086">081586753086</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Peta -->
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.89984461242972!2d106.73638982632598!3d-6.21118793562963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f74fe989d075%3A0x72dad3b112192c76!2sJl.%20H.%20Juhri%20No.A%20no%201%2C%20RT.3%2FRW.2%2C%20Meruya%20Sel.%2C%20Kec.%20Kembangan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011610!5e0!3m2!1sid!2sid!4v1735823601124!5m2!1sid!2sid"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection