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
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href={{ asset('css/boxicon/css/boxicons.min.css') }}>

</head>

<body>
    
    @include('partial.navbar')

    @yield('konten')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('css/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>  

<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

</script>
</body>

</html>