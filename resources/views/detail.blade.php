
    @extends('layout.utama')
    
    @section('konten')
        
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-4">
                <div class="produk-avatar text-center">
                    <img src="{{ asset('storage/avatarproduk/' . $produk['avatar']) }}" class="img-fluid" alt="Produk Avatar">
                </div>
            </div>
            <div class="col-md-8 my-4">
                <h3>{{ $produk['nama'] }}</h3>
                <p style="text-align: justify">{{ $produk['deskripsi'] }}</p>
                <div class="bg-info rounded text-center py-3">
                    <strong>Harga</strong>
                    <p class="card-text"><strong>{{ 'Rp. ' . number_format($produk['harga'], 0, ',', '.') }}</strong></p>
                </div>
            </div>
            <div class="col-12 rounded py-3 mb-4" style="background-color: greenyellow">
                <p class="text-center">Pesan sekarang di<br>
                <strong><i class='bx bxl-whatsapp' style="color: green; font-size:30px"></i>085215321818</strong></p>
            </div>
        </div>
    </div>
    
    @endsection
   