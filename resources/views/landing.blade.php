@extends('layout.utama')


@section('konten')
{{-- carousel start --}}
<div id="carouselExampleIndicators" class="carousel slide ">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src={{ asset('asset/slide1.jpg') }} class="d-block w-100"
            alt="...">
        </div>
        <div class="carousel-item">
            <img src={{ asset('asset/slide2.jpg') }} class="d-block w-100"
            alt="...">
        </div>
        <div class="carousel-item">
            <img src={{ asset('asset/slider3.jpg') }} class="d-block w-100"
            alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
{{-- carousel end --}}

{{-- product start --}}
<br>
<div class="container">
    <h1 class="text-center">Daftar Produk</h1>
    <br>
        <div class="row">
            @foreach ($produk as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://placeimg.com/400/400/tech" class="card-img-top" alt="{{ $item['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- product end --}}
    
    
    @endsection