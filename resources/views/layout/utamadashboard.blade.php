<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkatama Store</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>

</head>


<body>


<style>
    .navside li{
        margin: 2em 0;
        text-decoration: none;
    }

    .sidebar .dropdown-menu{
        margin: 0
    }
</style>

    
    @include('partial.navbar')

<div class="container-fluid">
    <div class="row">

        @include('partial.sidebar')

        @yield('kontendashboard')
        
    </div>
</div>

<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>