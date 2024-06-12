<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('templates/fruitables/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/fruitables/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link href="{{ asset('templates/fruitables/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('templates/fruitables/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <nav class="container-fluid">
        @include('layouts.landing.partials.navbar')
    </nav>
    <!-- Navbar End -->

    {{-- Main Content --}}
    @yield('content')


    <!-- Footer Start -->
    <footer class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        @include('layouts.landing.partials.footer')
    </footer>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templates/fruitables/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('templates/fruitables/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('templates/fruitables/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('templates/fruitables/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('templates/fruitables/js/main.js') }}"></script>
</body>

</html>
