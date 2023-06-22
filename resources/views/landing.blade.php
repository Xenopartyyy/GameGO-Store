@extends('layout.utama')

@section('konten')
 {{-- carousel start --}}
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slide as $key => $item)
            <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                <img src="{{ asset('storage/banner/' . $item['banner']) }}" class="d-block w-100" alt="Banner">
            </div>
        @endforeach
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

    {{-- providing start --}}
    <div class="my-3">
        <div class="provide" id="provide">
            <div class="isi">
                <div class="text-center judulpro">
                    <h2>Apa yang kami berikan?</h2>
                </div>
                <br><br><br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <h5>Keamanan Terjamin</h5>
                            <i class='bx bx-check-shield' style="font-size: 120px; color:blue;"></i>
                            <p>Kami menjamin keamanan belanja Anda dengan sistem keamanan terpercaya dan perlindungan data
                                yang ketat. Belanja dengan kami adalah pengalaman yang aman dan nyaman</p>
                        </div>
                        <div class="col">
                            <h5>Barang Original</h5>
                            <i class='bx bx-like' style="font-size: 120px; color:rgb(0, 255, 115);"></i>
                            <p>Kami berkomitmen untuk menjadi olshop yang mengutamakan barang original. Kami percaya bahwa
                                keaslian produk adalah hal yang penting bagi pelanggan kami. Dengan memastikan bahwa semua
                                barang yang kami tawarkan adalah original, kami ingin memberikan kepercayaan dan kepuasan
                                kepada pelanggan dalam berbelanja di olshop kami.</p>
                        </div>
                        <div class="col">
                            <h5>Layanan Pelanggan 24 Jam</h5>
                            <i class='bx bx-phone-call' style="font-size: 120px; color:rgb(255, 208, 0);"></i>
                            <p>Kami siap memberikan pelayanan terbaik dengan layanan pelanggan kami yang tersedia 24 jam,
                                tim kami akan selalu ada di sini untuk membantu menjawab pertanyaan, memberikan saran
                                produk, dan menyelesaikan masalah dengan cepat. Kami berkomitmen untuk memberikan pengalaman
                                belanja yang menyenangkan dan aman, serta memastikan kepuasan pelanggan adalah prioritas
                                utama kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- providing end --}}

   

    {{-- product start --}}
    <section class="produk">
        <div class="container">
            <br><br>
            <h1 class="text-center">Daftar Produk</h1>
            <br>
            <div class="row">
                @foreach ($produk->take(3) as $item)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card item cardpro">
                            <img src="{{ asset('storage/avatarproduk/' . $item['avatar']) }}" class="card-img-top"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['nama'] }}</h5>
                                <p class="card-text">{{ 'Rp. ' . number_format($item['harga'], 0, ',', '.') }}</p>
                                <a class="btn btn-primary" href="/showproduct/{{ $item->id }}">Lihat lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br>
            <div class="buttonload text-center">
                <a href="/allproduk" class="btn btn-info">Lihat lainnya</a>
            </div>
        </div>
        <br><br>
    </section>
    {{-- product end --}}

     {{-- Testimoni start --}}
     <div class="judultest text-center mt-3">
        <h1>Testimoni</h1>
      </div>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="owl-carousel">
            @foreach ($testimoni as $testi)
            <div>
              <div class="cardtest p-3 text-center px-4">
                <div class="user-image text-center">
                    <img src="{{ asset('storage/avatartesti/' . $testi['avatar']) }}" class="card-img-top rounded-circle m-auto" style="width: 150px; height:150px; object-fit:cover">
                </div>
                <div class="user-content">
                  <h5 class="my-3">{{ $testi['nama']}}</h5>
                  <div class="my-2">{{ $testi['profesi'] }}</div>
                  <p>{{ $testi['testi']}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
     {{-- Testimoni end --}}
@endsection
