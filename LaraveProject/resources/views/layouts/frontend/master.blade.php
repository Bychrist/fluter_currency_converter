
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
    <!-- Livewire Styles -->

</head>

<body>

        <body class="home-three">
                <!-- Main Wrapper -->
            <div class="main-wrapper">
                    <!-- Header -->
<!-- /Header -->

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


    <footer class="footer footer-three">


        <!-- Footer Bottom -->
        <div class="footer-three-bottom" data-aos="fade-up">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright-three">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="social-icon-three">
                                <h6>Connect Socially</h6>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" class="feather-facebook-icon">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-twitter-icon">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-linkedin-icon">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="feather-youtube-icon">
                                            <i class="feather-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="privacy-policy-three">
                                <ul>
                                    <li><a href="https://dreamslms.dreamstechnologies.com/laravel/public/term-condition">Terms & Condition</a></li>
                                    <li><a href="https://dreamslms.dreamstechnologies.com/laravel/public/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="https://dreamslms.dreamstechnologies.com/laravel/public/support">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text-three">
                                <p class="mb-0">&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> DreamsLMS. All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
        </div>
    <!-- /Main Wrapper -->
    <!-- jQuery -->
<script src="{{URL::to('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>


<!-- Bootstrap Core JS -->
<script src="{{URL::to('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- counterup JS -->
<script src="{{URL::to('frontend/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{URL::to('frontend/assets/js/jquery.counterup.min.js')}}"></script>

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
