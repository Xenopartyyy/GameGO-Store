 {{-- sidebar start --}}

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
          <li><a class="link_name" href={{ url('/') }}>Home</a></li>
        </ul>
      </li>



      @if (Auth::user()->role != 'admin' && Auth::user()->role != 'staff')
      
      @else
      <li>
        <a href="{{ url('/slider') }}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Landing Slider</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/slider') }}">Landing Slider</a></li>
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
          <li><a class="link_name" href="{{ url('/produk') }}">Daftar Produk</a></li>
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
        <a href="{{ url('/pengguna') }}">
          <i class='bx bx-user' ></i>
          <span class="link_name">Daftar Pengguna</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/pengguna') }}">Daftar Pengguna</a></li>
        </ul>
      </li>

      @endif

      <li>
        <!-- FOTO AUTH START -->
    <div class="profile-details">
      <div class="profile-content">
        <img class="rounded" src="storage/avatar/{{ Auth::user()->avatar }}" alt="profileImg">
      </div>
      <div class="name-job text-center">
        <div class="profile_name">{{ Auth::user()->nama }}</div>
        <div class="job">{{ Auth::user()->role }}</div>

      </div>
      <div>
        <a class="logout" href="{{ url('/logout') }}" role="button">
          <i class='bx bx-log-out-circle bx-lg' style='color:#ef1e1e'  ></i></a>
      </div>
    </div>
    <!-- FOTO AUTH END -->
</ul>
</div>

{{-- sidebar end --}}