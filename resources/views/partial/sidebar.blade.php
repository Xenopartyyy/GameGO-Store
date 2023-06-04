 {{-- sidebar start --}}
 {{-- <div class="col-2 bg-dark text-light sidebar" style="height: 120vh; display: flex; flex-direction: column;">
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
</div> --}}






<div class="sidebar close">
    <div class="logo-details">
      <i class='bx '><img style="width: 40px" src="{{ asset('asset/icon/iconthumb.png') }}" alt=""></i>
      <span class="logo_name">Game<span style="color: rgb(255, 72, 0)">GO</span></span>
    </div>
    <ul class="nav-links">


      
      <li>
        <a href="{{ url('/') }}">
          <i class='bx bx-home-smile' ></i>
          

          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>



      @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
      
      @else
      <li>
        <a href="{{ url('/slider') }}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      @endif


      @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
      <li>
        <a href="{{ url('/produk') }}">
          <i class='bx bxs-package' ></i>
          <span class="link_name">Daftar Produk</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Daftar Produk</a></li>
        </ul>
      </li>
      @else
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Produk</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/produk') }}">Daftar Produk</a></li>
        </ul>
      </li>
      @endif


      @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')

      @else

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="link_name">Pengguna</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Pengguna</a></li>
          <li><a href="{{ url('/gruppengguna') }}">Grup Pengguna</a></li>
          <li><a href="{{ url('/pengguna') }}">Daftar Pengguna</a></li>
        </ul>
      </li>

      @endif



      <li>


       <!-- <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li> -->
        <!-- FOTO AUTH START -->
    <div class="profile-details">
      <div class="profile-content">
        <img class="rounded" src="storage/avatar/{{ Auth::user()->avatar }}" alt="profileImg">
      </div>
      <div class="name-job text-center">
        <div class="profile_name">{{ Auth::user()->nama }}</div>
        <div class="job">{{ Auth::user()->role }}</div>

      </div>
      {{-- <i class='bx bx-log-out' href="{{ url('/logout') }}" ></i> --}}
      <div>
        <a class="logout" href="{{ url('/logout') }}" role="button">
          <i class='bx bx-log-out-circle bx-lg' style='color:#ef1e1e'  ></i></a>
      </div>
    </div>
    <!-- FOTO AUTH END -->
</ul>
</div>

{{-- sidebar end --}}