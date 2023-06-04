<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameGO Store</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>
    <link rel="icon" type="image/x-icon" href={{ asset('asset/icon/favicon.ico') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">


</head>

<body>
    
    @include('partial.navbar')

    @yield('konten')


<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>