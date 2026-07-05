<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" target="_blank" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" target="_blank"
                            href="{{ config('app.siteMap1') }}" target="_blank"><i class="bi bi-geo-alt me-2"></i><span
                                class="d-none d-xl-inline-block">{{ config('app.siteAddress') }}</span></a>
                        <a class="text-decoration-none text-body pe-3" target="_blank"
                            href="mailto:{{ config('app.siteEmail') }}" target="_blank"><i
                                class="bi bi-envelope me-2"></i><span
                                class="d-none d-xl-inline-block">{{ config('app.siteEmail') }}</span></a>
                        <a class="text-decoration-none text-body pe-3" target="_blank"
                            href="tel:{{ config('app.sitePhone') }}" target="_blank"><i
                                class="bi bi-telephone me-2"></i><span
                                class="d-none d-xl-inline-block">{{ config('app.sitePhone') }}</span></a>
                        <a class="text-decoration-none text-body pe-3"
                            href="https:://wa.me/{{ config('app.siteWhatsapp') }}" target="_blank"><i
                                class="bi bi-whatsapp me-2"></i><span
                                class="d-none d-xl-inline-block">{{ config('app.siteWhatsapp') }}</span></a>
                    </div>
                </div>
                <div class="col-md-4 col-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" target="_blank" href="{{ config('app.facebook') }}">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" target="_blank" href="{{ config('app.twitter') }}">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" target="_blank" href="{{ config('app.linkedin') }}">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" target="_blank" href="{{ config('app.instagram') }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" target="_blank" href="{{ config('app.youtube') }}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i
                            class="fa fa-clinic-medical me-2"></i>{{ config('app.siteName') }}</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('service') }}"
                            class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">Service</a>
                        <a href="{{ route('pricing') }}"
                            class="nav-item nav-link {{ Route::is('pricing') ? 'active' : '' }}">Pricing</a>
                        <a href="{{ route('team') }}"
                            class="nav-item nav-link {{ Route::is('team') ? 'active' : '' }}">Team</a>
                        <a href="{{ route('appointment') }}"
                            class="nav-item nav-link {{ Route::is('appointment') ? 'active' : '' }}">Appointment</a>
                        <a href="{{ route('search') }}"
                            class="nav-item nav-link {{ Route::is('search') ? 'active' : '' }}">Search</a>
                        <a href="{{ route('testimonial') }}"
                            class="nav-item nav-link {{ Route::is('testimonial') ? 'active' : '' }}">Testimonial</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                        <a href="{{ route('admin-home') }}"
                            class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Admin</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="search.html" class="dropdown-item">Search</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('main')
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container">
            <a href="{{ route('home') }}" class="fs-1">{{ config('app.siteName') }}</a>
        </div>
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4
                        class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Get In Touch</h4>
                    <p class="mb-4">{{ config('app.siteName') }} is committed to providing compassionate,
                        high-quality healthcare with advanced medical technology and experienced specialists. We focus
                        on patient-centered treatment, preventive care, and trusted medical services to help individuals
                        and families lead healthier lives.
                    </p>
                    <a href={{ config('app.siteMap1') }} target="_blank" class="mb-2 d-block"><i
                            class="fa fa-map-marker-alt text-primary me-3"></i>{{ config('app.siteAddress') }}</a>
                    <a href={{ config('app.siteMap1') }} target="_blank" class="mb-2 d-block"><i
                            class="fa fa-envelope text-primary me-3"></i>{{ config('app.siteEmail') }}</a>
                    <a href={{ config('app.siteMap1') }} target="_blank" class="mb-2 d-block"><i
                            class="fa fa-phone text-primary me-3"></i>{{ config('app.sitePhone') }}</a>
                    <a href={{ config('app.siteMap1') }} target="_blank" class="mb-2 d-block"><i
                            class="bi bi-whatsapp text-primary me-3"></i>{{ config('app.siteWhatsapp') }}</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4
                        class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" target="_blank" href="{{ route('home') }}"><i
                                class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('about') }}"><i
                                class="fa fa-angle-right me-2"></i>About</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('service') }}"><i
                                class="fa fa-angle-right me-2"></i>Service</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('pricing') }}"><i
                                class="fa fa-angle-right me-2"></i>Pricing</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('team') }}"><i
                                class="fa fa-angle-right me-2"></i>Team</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('appointment') }}"><i
                                class="fa fa-angle-right me-2"></i>Appointment</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4
                        class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" target="_blank" href="{{ route('home') }}"><i
                                class="fa fa-angle-right me-2"></i>Search</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('about') }}"><i
                                class="fa fa-angle-right me-2"></i>Testimonial</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('service') }}"><i
                                class="fa fa-angle-right me-2"></i>Contact Us</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('pricing') }}"><i
                                class="fa fa-angle-right me-2"></i>Privacy Policy</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('team') }}"><i
                                class="fa fa-angle-right me-2"></i>Terms And Conditions</a>
                        <a class="text-light mb-2" target="_blank" href="{{ route('appointment') }}"><i
                                class="fa fa-angle-right me-2"></i>Data Policy</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4
                        class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                        Newsletter</h4>
                    <h5 class="text-light">Stay Updated with Our Health Newsletter</h5>
                    <p class="text-light">Subscribe to the {{ config('app.siteName') }} newsletter to receive the
                        latest health tips, wellness advice, medical updates, and hospital news. </p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="_blank"
                            href="{{ config('app.siteFacebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="_blank"
                            href="{{ config('app.siteTwitter') }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="_blank"
                            href="{{ config('app.siteLinkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="_blank"
                            href="{{ config('app.siteYoutube') }}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" target="_blank"
                            href="{{ config('app.siteInstagram') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" target="_blank"
                            href="{{ route('home') }}">{{ config('app.siteName') }}</a>. All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

    <script>
        var editor1 = new RichTextEditor(document.getElementById("div_editor1"));
        editor1.attachEvent("change", function() {
            document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
        });
    </script>

</body>

</html>
