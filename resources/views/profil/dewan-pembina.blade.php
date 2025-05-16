@extends('homepage.layout')

@section('title', 'Dewan Pembina')

@section('content')
<div class="container mt-5">
    <!-- Bagian Heading -->
    <div class="row">
        <div class="col-12">
            <div class="section-title mb-4">
                <h2>Dewan Pembina</h2>
                <p>IMTSI PERIODE 2025</p>
            </div>
        </div>
    </div>

    <!-- Bagian Card -->
    <div class="row">
    @foreach ($pembina as $index => $item)
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow-sm">
                <!-- Menggunakan asset untuk foto yang disimpan di public -->
                <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="{{ $item->nama }}" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama }}</h5>
                    <p class="card-text">{{ $item->jabatan }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection
