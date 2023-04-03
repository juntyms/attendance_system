@extends('layouts.base')

@section('content')

<!-- partial:partials/_navbar.html -->

@include('layouts.partials.navbar')

<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('layouts.partials.sidebar')

    <!-- partial -->
    <div class="main-panel">
        @yield('main')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        @include('layouts.partials.footer')

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
@endsection