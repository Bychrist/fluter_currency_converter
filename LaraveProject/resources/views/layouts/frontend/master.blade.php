
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreams LMS</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('frontend/assets/img/favicon.svg')}}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/bootstrap.min.css')}}">


<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/fontawesome/css/all.min.css')}}">

<!-- Feather CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/feather.css')}}">

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/select2/css/select2.min.css')}}">

<!-- Datatable CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/owl.theme.default.min.css')}}">

<!-- Swiper CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/swiper/css/swiper.min.css')}}">

<!-- Slick CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/slick/slick.css')}}">
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/slick/slick-theme.css')}}">

<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/feather/feather.css')}}">

<!-- Dropzone -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/dropzone/dropzone.min.css')}}">

<!-- Aos CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/plugins/aos/aos.css')}}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{URL::to('frontend/assets/css/custom.css')}}">
    <!-- Livewire Styles -->

</head>

<body>

        <body class="home-three">
                <!-- Main Wrapper -->
            <div class="main-wrapper">
                    <!-- Header -->


    <!-- Header -->
    <header class="header-three">
        <div class="header-fixed-three header-fixed">
            <nav class="navbar navbar-expand-lg header-nav-three scroll-sticky">
                <div class="container">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="{{route('home')}}" class="navbar-brand logo">
                            <img src="{{URL::to('frontend/assets/img/logo/logo.png')}}" class="img-fluid" alt="Logo">
                        </a>
                    </div>

                </div>
            </nav>
        </div>
    </header>


    @yield('content')

               @if(!Request::is('/'))
                  <footer class="footer">

                    <!-- Footer Top -->
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-about">
                                        <div class="footer-logo">
                                            <img src="{{asset('frontend/assets/img/logo.svg')}}" alt="logo">
                                        </div>
                                        <div class="footer-about-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                                        </div>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-2 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">For Instructor</h2>
                                        <ul>
                                            <li><a href="instructor-profile.html">Profile</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="instructor-list.html">Instructor</a></li>
                                            <li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li>
                                        </ul>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-2 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">For Student</h2>
                                        <ul>
                                            <li><a href="student-profile.html">Profile</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="students-list.html">Student</a></li>
                                            <li><a href="deposit-student-dashboard.html"> Dashboard</a></li>
                                        </ul>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <!-- Footer Widget -->
                                    <div class="footer-widget footer-contact">
                                        <h2 class="footer-title">News letter</h2>
                                        <div class="news-letter">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Enter your email address" name="email">
                                            </form>
                                        </div>
                                        <div class="footer-contact-info">
                                            <div class="footer-address">
                                                <img src="{{asset('frontend/assets/img/icon/icon-20.svg')}}" alt="" class="img-fluid">
                                                <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                                            </div>
                                            <p>
                                                <img src="{{asset('frontend/assets/img/icon/icon-19.svg')}}" alt="" class="img-fluid">
                                                dreamslms@example.com
                                            </p>
                                            <p class="mb-0">
                                                <img src="{{asset('frontend/assets/img/icon/icon-21.svg')}}" alt="" class="img-fluid">
                                                +19 123-456-7890
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Footer Widget -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Footer Top -->

                    <!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="container">

                            <!-- Copyright -->
                            <div class="copyright">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="privacy-policy">
                                            <ul>
                                                <li><a href="term-condition.html">Terms</a></li>
                                                <li><a href="privacy-policy.html">Privacy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="copyright-text">
                                            <p class="mb-0">© 2023 DreamsLMS. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Copyright -->

                        </div>
                    </div>
                    <!-- /Footer Bottom -->

                </footer>
                @endif

<script src="{{URL::to('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>


<!-- Bootstrap Core JS -->
<script src="{{URL::to('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- counterup JS -->
<script src="{{URL::to('frontend/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{URL::to('frontend/assets/js/jquery.counterup.min.js')}}"></script>

@yield('frontendscript')
<!-- Select2 JS -->
<script src="{{URL::to('frontend/assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{URL::to('frontend/assets/js/owl.carousel.min.js')}}"></script>

<!-- Slick Slider -->
<script src="{{URL::to('frontend/assets/plugins/slick/slick.js')}}"></script>

<!-- Aos -->
<script src="{{URL::to('frontend/assets/plugins/aos/aos.js')}}"></script>

<!-- Ckeditor JS -->
<script src="{{URL::to('frontend/assets/js/ckeditor.js')}}"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="{{URL::to('frontend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

<!-- Swiper Slider -->
<script src="{{URL::to('frontend/assets/plugins/swiper/js/swiper.min.js')}}"></script>

<!-- Feature JS -->
<script src="{{URL::to('frontend/assets/plugins/feather/feather.min.js')}}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{URL::to('frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{URL::to('frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

<!-- Chart JS -->
<script src="{{URL::to('frontend/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{URL::to('frontend/assets/plugins/apexchart/chart-data.js')}}"></script>

<!-- Progress JS -->
<script src="{{URL::to('frontend/assets/js/circle-progress.min.js')}}"></script>

<!-- Dropzone JS -->
<script src="{{URL::to('frontend/assets/plugins/dropzone/dropzone.min.js')}}"></script>

<!-- Validation-->
<script src="{{URL::to('frontend/assets/js/validation.js')}}"></script>


<!-- Custom JS -->
<script src="{{URL::to('frontend/assets/js/script.js')}}"></script>

</body>

</html>
