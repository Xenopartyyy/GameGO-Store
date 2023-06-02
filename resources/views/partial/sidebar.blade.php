 {{-- sidebar start --}}
 <div class="col-2 bg-dark text-light sidebar" style="height: 120vh; display: flex; flex-direction: column;">
    <ul class="navside flex-column list-unstyled text-center">


        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
        
        @else
        <li> <a href='{{ url('/slider') }}' class="link-opacity-50-hover text-light text-decoration-none">Dashboard Slider</a> </li>
        @endif





        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
            <li><a class="link-opacity-50-hover text-light text-decoration-none" href='produk'>Daftar Produk</a></li>
        @else
        <li class="dropdown">
            <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                Produk
            </a> 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href='{{ url('/kategori') }}'>Kategori</a></li>
                <li><a class="dropdown-item" href='{{ url('/produk') }}'>Daftar Produk</a></li>
            </ul>
        </li>
        @endif


        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')

        @else
        <li class="dropdown">
            <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                Pengguna
            </a> 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href='{{ url('/gruppengguna') }}'>Grup Pengguna</a></li>
                <li><a class="dropdown-item" href='{{ url('/pengguna') }}'>Daftar Pengguna</a></li>
            </ul>
        </li>
        @endif
    </ul>
</div>
{{-- sidebar end --}}