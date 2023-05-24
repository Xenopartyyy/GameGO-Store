<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>
    <title>Document</title>
</head>
<style>
    body { 
     padding-top: 3.5em; 
    }

    .navside li{
        margin: 2em 0;
        text-decoration: none;
    }

    .sidebar .dropdown-menu{
        margin: 0
    }
</style>
<body>

    {{-- nav start --}}
    <nav class="navbar navbar-expand-lg fixed-top bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ $judul }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('dashboard') }}>Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- navend --}}


    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark text-light sidebar" style="height: 100vh">
                <ul class="navside flex-column list-unstyled text-center">
                    <li> <a href="" class="link-opacity-50-hover text-light text-decoration-none">Dashboard Slider</a> </li>
                    <li class="dropdown">
                        <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            Produk
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kategori</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Produk</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="link-opacity-50-hover text-light text-decoration-none dropdown-toggle" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            Pengguna
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Grup Pengguna</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Pengguna</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <h3 class="text-center mt-2">Selamat datang dihalaman dashboard</h3>
            </div>
        </div>
    </div>
    
    



    <script src={{ asset('bootstrap/bootstrap.bundle.min.js') }}></script>

</body>

</html>
