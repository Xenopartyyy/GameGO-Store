<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameGO Store</title>
    <link rel="stylesheet" href={{ asset('css/stylesidebar.css') }}>
    <link rel="stylesheet" href={{ asset('bootstrap/bootstrap.min.css') }}>
    <link rel="icon" type="image/x-icon" href={{ asset('asset/icon/favicon.ico') }}>
    <link rel="stylesheet" href={{ asset('css/boxicon/css/boxicons.min.css') }}>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/date-1.4.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/datatables.min.css" rel="stylesheet"/>

</head>


<body>

    @include('partial.sidebar')

    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu' ></i>
          <span class="text">Dashboard</span>
        </div>
        
            @yield('kontendashboard')
        
    </section>


<script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/date-1.4.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/datatables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


</body>
</html>









{{-- <style>
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
</style> --}}

    
    {{-- @include('partial.navbardashboard') --}}

{{-- <div class="container-fluid mainco">
    <div class="row">

        @include('partial.sidebar')

        @yield('kontendashboard')
        
    </div>
</div> --}}