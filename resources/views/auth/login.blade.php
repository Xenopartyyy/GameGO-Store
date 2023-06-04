<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap');
        .main{
            background-color: #0b2239;
        }
        .card{
            color: rgb(255,72,0);
            background-color: white;
            font-family: 'Poppins', sans-serif;

        }
        .login{
            font-family: 'Signika', sans-serif;
        }
        .container-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .sign{
            background-color: rgb(255,72,0);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid main">
        <div class="container-box">
            <div class="card shadow-lg " style="width: 400px;">
                <div class="card-body kartu">
                    <form action="{{ route('loginproses') }}" method="POST">
                        @csrf
                        <h1 class="login">Login</h1>
                        <div class="mb-3">
                            <label class="form-label" for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email"
                                placeholder="Email" required>
                        </div>
                        @error('email')
                            <div class="alert alert-primary mb-3 m-auto" style="width: 32rem;" role="alert">
                                {{ $errors }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label class="form-label" for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar disini!</a></p>
                            </div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn sign btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
