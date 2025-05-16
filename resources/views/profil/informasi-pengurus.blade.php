@extends('homepage.layout')

@section('title', 'Informasi Pengurus')

@section('content')
<div class="container mt-5">
    <!-- Bagian Heading -->
    <div class="row">
        <div class="col-12">
            <div class="section-title mb-4">
                <h2>Struktur Organisasi</h2>
                <p>IMTSI PERIODE 2025</p>
            </div>
        </div>
    </div>

    <!-- Bagian Card -->
    <div class="row">
    @foreach ($pengurus as $index => $item)
        <div class="col-md-3 mb-4 d-flex justify-content-center">
            <div class="card-pengurus text-center shadow-sm">
                <!-- Gambar pengurus -->
                <div class="card__hero" style="background-image: url('{{ asset('storage/' . $item->foto) }}');">
                </div>
                <footer class="card__footer">
                    <div class="card__job-summary">
                        <div class="card__job-icon">
                            <img src="{{ asset('assets/img/logotengah.png') }}" alt="Icon" height="36" width="36">
                        </div>
                        <div class="card__job">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ $item->jabatan }}</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
