<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/frontend/assets/css/style.css" rel="stylesheet">
</head>
<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="{{ asset('/frontend/assets/img/profile-img.jpg') }}" alt="Photo of me" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Abduazam</a></h1>
                <div class="social-links mt-3 text-center">
                    <a target="_blank" href="https://github.com/abduazam" class="github"><i class="bx bxl-github"></i></a>
                    <a target="_blank" href="https://t.me/abduazam_blogi" class="telegram"><i class="bx bxl-telegram"></i></a>
                    <a target="_blank" href="https://instagram.com/aabduazam/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a target="_blank" href="https://linkedin.com/in/abduazam/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}">
                            <i class="bx bx-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/resume') }}" class="nav-link scrollto {{ request()->is('resume') ? 'active' : '' }}">
                            <i class="bx bx-file-blank"></i>
                            <span>Resume</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/portfolio') }}" class="nav-link scrollto {{ request()->is('portfolio*') ? 'active' : '' }}">
                            <i class="bx bx-book-content"></i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- ======= To up Top ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/frontend/assets/vendor/aos/aos.js"></script>
    <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/vendor/typed.js/typed.min.js"></script>
    <script src="/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/frontend/assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="/frontend/assets/js/main.js"></script>
</body>
</html>
