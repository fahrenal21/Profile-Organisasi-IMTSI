@extends('homepage.layout')

@section('title', 'Dewan Pengawas')

@section('content')
<div class="container mt-5">
    <!-- Bagian Heading -->
    <div class="row">
        <div class="col-12">
            <div class="section-title mb-4">
                <h2>Dewan Pengawas</h2>
                <p>IMTSI PERIODE 2025</p>
            </div>
        </div>
    </div>

    <!-- Bagian Card -->
    <div class="row">
    @foreach ($pengawas as $index => $item)
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow-sm">
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
