<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PESO EMIS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicons -->
    <link href="{{ 'img\homepage\peso_icon.png' }}" rel="icon">
    <link href="{{ 'img\homepage\apple-touch-icon.png' }}" rel="apple-touch-icon">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- Add location api --}}
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
    
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ 'vendor\homevendor\animate.min.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\aos\aos.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\bootstrap\css\bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\bootstrap-icons\bootstrap-icons.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\boxicons\css\boxicons.min.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\glightbox\css\glightbox.min.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\remixicon\remixicon.css' }}" rel="stylesheet">
    <link href="{{ 'vendor\homevendor\swiper\swiper-bundle.min.css' }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ 'css\homepage.css' }}" rel="stylesheet">
    @livewireStyles

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">PESO EMIS</a></h1>
            </div>

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ 'vendor\homevendor\aos\aos.js' }}"></script>
    <script src="{{ 'vendor\homevendor\bootstrap\js\bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'vendor\homevendor\glightbox\js\glightbox.min.js' }}"></script>
    <script src="{{ 'vendor\homevendor\isotope-layout\isotope.pkgd.min.js' }}"></script>
    <script src="{{ 'vendor\homevendorphp-email-form\validate.js' }}"></script>
    <script src="{{ 'vendor\homevendor\swiper\swiper-bundle.min.js' }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ 'js\homepage.js' }}"></script>
    @livewireScripts
</body>

</html>
