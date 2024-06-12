<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" type="image" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('templates/modernize/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @yield('content')
    </div>

    {{-- JQuery --}}
    <script src="{{ asset('templates/modernize/libs/jquery/dist/jquery.min.js') }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset('templates/modernize/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
