<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('templates/modernize/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            @include('layouts.dashboard.partials.sidebar')
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            <header class="app-header">
                @include('layouts.dashboard.partials.header')
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- JQuery --}}
    <script src="{{ asset('templates/modernize/libs/jquery/dist/jquery.min.js') }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset('templates/modernize/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/modernize/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('templates/modernize/js/app.min.js') }}"></script>
    <script src="{{ asset('templates/modernize/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('templates/modernize/js/dashboard.js') }}"></script>

    {{-- Sweetalert JS --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('js/custom-sweetalert.js') }}"></script> --}}

    @stack('scripts')
</body>

</html>
