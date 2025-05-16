@extends('homepage.layout')

@section('title', 'Sejarah')

@section('content')

<section id="sejarah">
    <div class="container">
        <!-- Title Section -->
        <div class="title mb-5">
            <h1>Sejarah IMTSI</h1>
            <p>Jejak perjalanan yang membentuk sebuah kemufakatan besar.</p>
        </div>

        <!-- Timeline Section -->
        <div class="timeline">
            <!-- Event 1 -->
            <div class="timeline-event">
                <div class="timeline-content">
                    <h4>2 Oktober 2011</h4>
                    <p>Pertemuan di Bandung memperoleh kesepakatan untuk membentuk wadah komunikasi mahasiswa sipil yang juga diharapkan menjadi wadah yang mampu mengembangkan karakter mahasiswa teknik sipil untuk lebih profesional.</p>
                </div>
                <div class="timeline-icon">
                    <img src="{{ asset('assets/img/concept.svg') }}" alt="2 Oktober 2011">
                </div>
            </div>

            <!-- Event 2 -->
            <div class="timeline-event">
                <div class="timeline-icon">
                    <img src="{{ asset('assets/img/process.svg') }}" alt="10 Oktober 2011">
                </div>
                <div class="timeline-content">
                    <h4>10 Oktober 2011</h4>
                    <p>Diadakan pertemuan di Jakarta guna mematangkan rencana pembentukan wadah tersebut dan kemudian munculah nama yang kemudian disepakati, yaitu Ikatan Mahasiswa Teknik Sipil Indonesia (IMTSI).</p>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="timeline-event">
                <div class="timeline-content">
                    <h4>19-30 November 2012</h4>
                    <p>Pertemuan di Jakarta yang diberi nama Pekan Ilmiah Mahasiswa Teknik Sipil Indonesia. Salah satu rangkaian acaranya adalah kongres pertama IMTSI yang menghasilkan AD/ART serta menetapkan hari berdirinya IMTSI pada 24 November 2012.</p>
                </div>
                <div class="timeline-icon">
                    <img src="{{ asset('assets/img/complete.svg') }}" alt="19-30 November 2012">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection