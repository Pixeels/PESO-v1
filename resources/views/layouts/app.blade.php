<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PESO EMIS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{-- @vite('resources/css/app.css') --}}

    <!-- Favicons -->
    <link href="{{ 'img\homepage\peso_icon.png' }}" rel="icon">
    <link href="{{ 'img\homepage\apple-touch-icon.png' }}" rel="apple-touch-icon">

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


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">PESO EMIS</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

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

</body>

</html>
