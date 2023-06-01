<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container-box">
            <div class="card" style="width: 400px;">
                <div class="card-body">
                    <form action="/registerproses" method="POST">
                        @csrf
                        <h1>Register</h1>
                        <div class="mb-3">
                            <label class="form-label" for="inputNamaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputPhone">Nomor Handphone</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Nomor Handphone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputAddress">Alamat</label>
                            <input type="text" class="form-control" id="inputAddres" placeholder="Alamat" name="address" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
