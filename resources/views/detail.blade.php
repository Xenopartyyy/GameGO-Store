@extends('layout.utama')

@section('konten')
    

<div class=" mt-4">
    <div class="row">
        <div class="col-3">
            <div class="produk-avatar">
               <img src="{{ asset('storage/avatarproduk/' . $produk['avatar']) }}" style="width: 300px">
            </div>             
        </div>
        <div class="col-7">
            <h3>{{ $produk['nama'] }}</h1>
            <br><br><br>
            <p style="text-align: justify">{{ $produk['deskripsi'] }}</p>
            <div class="bg-info">
                <h5>Harga</h5>
                <p class="card-text">{{ 'Rp. ' . number_format($produk['harga'], 0, ',', '.') }}</p>
            </div>    
        </div>
        <div class="col-2">
            <p>Pesan sekarang di <br><br>
            <i class='bx bxl-whatsapp' style="color: green; font-size:30px " ></i>085215321818</p>
        </div>
    </div>
</div>



    
@endsection

