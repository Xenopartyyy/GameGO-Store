 {{-- sidebar start --}}
 <div class="col-2 bg-dark text-light sidebar" style="height: 100vh">
    <ul class="navside flex-column list-unstyled text-center">
        <li> <a href={{ url('/dashboard') }} class="link-opacity-50-hover text-light text-decoration-none">Dashboard Slider</a> </li>
        <li class="dropdown">
            <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                Produk
            </a> 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href={{ url('/produk/kategori') }}>Kategori</a></li>
                <li><a class="dropdown-item" href={{ url('/produk/daftarproduk') }}>Daftar Produk</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                Pengguna
            </a> 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href={{ url('/pengguna/gruppengguna') }}>Grup Pengguna</a></li>
                <li><a class="dropdown-item" href={{ url('/pengguna/daftarpengguna') }}>Daftar Pengguna</a></li>
            </ul>
        </li>
    </ul>
</div>
{{-- sidebar end --}}