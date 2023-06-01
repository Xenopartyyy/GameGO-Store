{{-- navbar --}}
<nav class="navbar navbar-expand-md" id="my-navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#"><span>GameGO</span> Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ url('/') }}>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('dashboard')}}>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger" type="submit" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
</nav>