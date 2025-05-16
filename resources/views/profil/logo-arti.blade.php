@extends('homepage.layout')
@section('title','Logo & Arti')
@section('content')
<section id="makna">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 definisi" data-aos="fade-right">
                <h1>Logo & Arti</h1>
                <p class="justify-text">Lahir atas dasar rasa kesadaran yang sama dari mahasiswa/i teknik sipil dari beberapa institusi dan daerah yang ada di tanah air, bahwa mahasiswa sebagai basis intelektual harus mampu meningkatkan kualitas dan kapabilitasnya.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('assets/img/artilogo.png') }}"alt="">
            </div>
        </div>
    </div>
</section>

@endsection