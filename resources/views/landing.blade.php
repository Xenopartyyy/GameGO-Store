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
        <div class="carousel-inner">
          @foreach ($slide as $item)
          <div class="carousel-item active">
            <img src="{{ asset('storage/banner/' . $item['banner']) }}"
            alt="...">
        </div>
          @endforeach
            {{-- <div class="carousel-item">
                <img src={{ asset('asset/Slider/slide2.jpg') }} class="d-block w-100"
                alt="...">
            </div>
            <div class="carousel-item">
                <img src={{ asset('asset/Slider/slide3.jpg') }} class="d-block w-100"
                alt="...">
            </div> --}}
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



{{-- providing start --}}
<div class="my-3">
<div class="provide">
    <div class="isi">
        <div class="text-center judulpro"><h2>Apa yang kami berikan?</h2></div><br><br><br>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <h5>Keamanan Terjamin</h5>
                <i class='bx bx-check-shield' style="font-size: 120px; color:blue;"></i>
                <p>Kami menjamin keamanan belanja Anda dengan sistem keamanan terpercaya dan perlindungan data yang ketat. Belanja dengan kami adalah pengalaman yang aman dan nyaman</p>
              </div>
              <div class="col">
                <h5>Barang Original</h5>
                <i class='bx bx-like' style="font-size: 120px; color:rgb(0, 255, 115);"></i>
                <p>Kami berkomitmen untuk menjadi olshop yang mengutamakan barang original. Kami percaya bahwa keaslian produk adalah hal yang penting bagi pelanggan kami. Dengan memastikan bahwa semua barang yang kami tawarkan adalah original, kami ingin memberikan kepercayaan dan kepuasan kepada pelanggan dalam berbelanja di olshop kami.</p>
              </div>
              <div class="col">
                <h5>Layanan Pelanggan 24 Jam</h5>
                <i class='bx bx-phone-call' style="font-size: 120px; color:rgb(255, 208, 0);"></i>
                <p>Kami siap memberikan pelayanan terbaik dengan layanan pelanggan kami yang tersedia 24 jam, tim kami akan selalu ada di sini untuk membantu menjawab pertanyaan, memberikan saran produk, dan menyelesaikan masalah dengan cepat. Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan aman, serta memastikan kepuasan pelanggan adalah prioritas utama kami.</p>
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
              <div class="card item cardpro" style="width: 300px;">
                  <img src="{{ asset('storage/avatarproduk/' . $item['avatar']) }}">
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
    



{{-- Footer Start --}}
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: rgb(11,34,57)"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <div class="logo fs-3">
                </h1>Game<span>GO</span></h1>
            </div>
              <p>
                GameGO merupakan marketplace belanja online yang menjual berbagai perlatan game yang berdiri sejak 2022 
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a class="text-white">MDWordPress</a>
              </p>
              <p>
                <a class="text-white">BrandFlow</a>
              </p>
              <p>
                <a class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
              </h6>
              <p>
                <a class="text-white">Your Account</a>
              </p>
              <p>
                <a class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a class="text-white">Help</a>
              </p>
            </div>
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
              <p><i class="fas fa-home mr-3"></i> Jl. Cikupa Raya no. 19, Banten, Indonesia </p>
              <p><i class="fas fa-envelope mr-3"></i> info@gamego.com</p>
              <p><i class="fas fa-phone mr-3"></i> 021 - 2342 - 8990</p>
              <p><i class="fas fa-print mr-3"></i> +62 878 9822 0933</p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="my-3">
  
        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2023 Copyright: PT. GameGO Store
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button">
                <i class='bx bxl-facebook-circle'></i></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class='bx bxl-twitter' ></i></a>
  
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class='bx bxl-google' ></i></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 class="text-white"
                 role="button"
                 ><i class='bx bxl-instagram' ></i></i
                ></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
    <!-- End of .container -->
    <!-- Footer -->
{{-- Footer End --}}
    @endsection