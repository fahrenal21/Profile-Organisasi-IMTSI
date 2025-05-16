@extends('homepage.layout')

@section('title', 'Demisioner')

@section('content')
<div class="container mt-5">
    <!-- Bagian Heading -->
    <div class="row">
        <div class="col-12">
            <div class="section-title mb-4">
                <h2>Demisioner</h2>
                <p>Ikatan Mahasiswa Teknik Sipil Indonesia</p>
            </div>
        </div>
    </div>

    <!-- Bagian Card -->
    <div class="row">
    @foreach ($demisioner as $index => $item)
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow-sm">
                <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['nama'] }}</h5>
                    <p class="card-text">{{ $item['jabatan'] }}</p>
                    <p class="card-text text-muted">Periode: {{ $item['periode'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection
