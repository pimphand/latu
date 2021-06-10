@include('admin.header')
<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('admin.sidebar')
    @yield('content')
    <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->
@include('admin.footer')
