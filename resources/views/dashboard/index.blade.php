<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
    .sidebar {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sidebar .navbar-toggler {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .row{
        height: 39em
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark sidebar">
                <nav class="navbar navbar-dark">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('dashboard.index') }}>Dashboard Slider</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                                <div class="dropdown-menu" aria-labelledby="produkDropdown">
                                    <a class="dropdown-item" href="#">Kategori</a>
                                    <a class="dropdown-item" href="#">Daftar Produk</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="penggunaDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengguna</a>
                                <div class="dropdown-menu" aria-labelledby="penggunaDropdown">
                                    <a class="dropdown-item" href="#">Grup Pengguna</a>
                                    <a class="dropdown-item" href="#">Daftar Pengguna</a>
                                </div>
                            </li>
                        </ul>
                </nav>
            </div>

            <div class="col-10">
                <h3 class="text-center mt-2">Selamat datang dihalaman dashboard</h3>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>