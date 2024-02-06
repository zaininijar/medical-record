<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/src') }}/assets/css/styles.min.css" />

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <x-sidebar />
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <x-header />
            <div class="container-fluid">
                @yield('content')
                <x-footer />
            </div>
        </div>
    </div>

    <script src="{{ asset('lib/src') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('lib/src') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/src') }}/assets/js/sidebarmenu.js"></script>
    <script src="{{ asset('lib/src') }}/assets/js/app.min.js"></script>
    <script src="{{ asset('lib/src') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('lib/src') }}/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('lib/src') }}/assets/js/dashboard.js"></script>

</body>


</html>
