@extends('homepage.layout')

@section('title','Gallery')

@section('content')
<section id="kegiatan">
    <div class="container">

        <!-- Bagian Heading -->
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-4 text-center">
                    <h2 data-aos="fade-right">Gallery</h2>
                    <p data-aos="fade-left">CHECK IMTSI ACTIVITY</p>
                </div>
            </div>
        </div>

        <!-- Filter Dropdown -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="dropdown-gallery">
                    <button class="btn btn-light dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-chevron-down"></i> Kategori
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                        <li><a class="dropdown-item filter-option" data-filter="all" href="#">Semua</a></li>
                        <li><a class="dropdown-item filter-option" data-filter="Terbaru" href="#">Terbaru</a></li>
                        <li><a class="dropdown-item filter-option" data-filter="kongres-1" href="#">Kongres 1</a></li>
                        <li><a class="dropdown-item filter-option" data-filter="kongres-2" href="#">Kongres 2</a></li>
                        <li><a class="dropdown-item filter-option" data-filter="kongres-3" href="#">Kongres 3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bagian Card (3 card per baris) -->
        <div class="row gallery-cards">
            @foreach ($gallery as $item)
                <div class="col-md-4 mb-4 filter-item" data-category="{{ $item->category }}">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h4 class="card-text">{{ $item->title }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination links -->
        <div class="pagination-container">
            {{ $gallery->links('pagination::bootstrap-4') }}  <!-- Menampilkan pagination dengan Bootstrap -->
        </div>

    </div>
</section>
@endsection
