<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NIBC</title>

    <link rel="icon" href="" sizes="20x20" type="image/png" />
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link
    href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- CSS for searching -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- JS for searching -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
// .js-example-basic-single declare this class into your select box
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
      <div>
        @include('layouts.header')
      </div>

        @yield('content')

        <div>
            @include('layouts.footer')
        </div>
    </div>

    <script type="text/javascript" src={{ asset('js/app.js') }}></script>
    <script type="text/javascript" src={{ asset('js/counter.js') }}></script>
    <script type="text/javascript" src={{ asset('js/main.js') }}></script>
    <script type="text/javascript" src={{ asset('js/vendor.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
          var swiper = new Swiper('.banner-slider', {
            loop: true,
            pagination: {
              el: '.swiper-pagination',
              type: 'progressbar',
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
    </script>
<script>
  var swiper = new Swiper('.swiper', {
  autoplay: {
   delay: 3000,
 },
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3,
  spaceBetween: 6,
   // Responsive breakpoints
   breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 480px
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    768: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
});
</script>
</body>
</html>
