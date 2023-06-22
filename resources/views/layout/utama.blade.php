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
    <link rel="stylesheet" href={{ asset('css/boxicon/css/boxicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/OwlCarousel/dist/assets/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/OwlCarousel/dist/assets/owl.theme.default.css') }}>
</head>

<body>
    
    @include('partial.navbar')

    @yield('konten')

    @include('partial.footer')

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src={{ asset('css/OwlCarousel/dist/owl.carousel.min.js') }}></script>
  <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>  
    
  <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    autoplaySpeed: 1000,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:3,
        }
    }
    })
   </script>

<script>
    $('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  </script>

</body>

</html>