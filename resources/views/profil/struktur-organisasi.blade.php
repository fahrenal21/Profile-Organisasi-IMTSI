@extends('homepage.layout')

@section('title', 'Struktur Organisasi')

@section('content')

<section id="struktur-organisasi">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img" data-aos="fade-right">
                <img src="{{ asset('assets/img/struktur.png') }}"alt="">
            </div>
            <div class="col-lg-5 definisi" data-aos="fade-left">
                <h1>Struktur Organisasi</h1>
                <p>Ikatan Mahasiswa Teknik Sipil Indonesia.</p>
            </div>
        </div>
    </div>
</section>

@endsection