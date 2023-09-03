<!DOCTYPE html>
<html lang="en">
@include('front.partials.header')

<body>
    <div class="container-xxl bg-white p-0">

        <!-- main content start -->
        @yield('main-content')
        <!-- end main content -->

        @include('front.partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front/js/main.js')}}"></script>
</body>

</html>
