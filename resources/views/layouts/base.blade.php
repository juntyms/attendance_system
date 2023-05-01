<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Attendance System</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-bar-rating/fontawesome-stars.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <style>
        .sidebar .nav.sub-menu .nav-item {
            margin: 0px;
        }

        .sidebar .nav.sub-menu {
            margin: 0px;
        }

        .btn-menu-link {
            border: none;
            outline: none;
            background: none;
            cursor: pointer;
            color: #666666;
            padding: 0;
            text-decoration: none;
            font-family: inherit;
            font-size: inherit;
        }

        .btn-menu-link:hover {
            color: #666666;
            text-decoration: none;
        }

        .btn-outline-primary:hover {
            color: #ffffff;
        }
    </style>
    @livewireStyles
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        @yield('content') </div>
    <!-- container-scroller -->


    <!-- base:js -->
    <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    @yield('jscript')
    @livewireScripts
</body>

</html>