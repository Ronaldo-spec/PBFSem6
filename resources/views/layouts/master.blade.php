<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AntriKuy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('general/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/general/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/general/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/general/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/general/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/general/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/general/style.css') }}" rel="stylesheet">
    @yield('styletambahan')
</head>

<body>
    @include('layouts.components.navbar')
    @include('sweetalert::alert')
    @yield('content')
</body>

@include('layouts.components.footer')


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/general/wow/wow.min.js') }}">
</script>
<script src="{{ asset('lib/general/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/general/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/general/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/general/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/general/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/general/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('lib/general/twentytwenty/jquery.event.move.js') }}"></script>
<script src="{{ asset('lib/general/twentytwenty/jquery.twentytwenty.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/general/main.js') }}"></script>
@yield('scripttambahan')

</html>