<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameGO Store</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href={{ asset('asset/icon/favicon.ico') }}>

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
    .form-group {
			margin-bottom: 1rem;
		}
</style>

    
    @include('partial.navbar')

<div class="container-fluid mainco">
    <div class="row">

        @include('partial.sidebar')

        @yield('kontendashboard')
        
    </div>
</div>

<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>