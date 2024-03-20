<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- owl carousle css -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css" type="text/css">

    <!-- Swiper Slider -->
    <link rel="stylesheet" href="css/swiper/swiper.min.css">
    <link rel="stylesheet" href="css/swiper/swiper-slide.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/custome/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/custome/responsive.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
</head>

<body>
    <!-- Nav Bar Starts here -->

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-light bg-dark">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="images/head_logo.png" alt="">
                </a>
                <!-- Logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Announcement
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown">
                                <a class="dropdown-item" href="#">Notification</a>
                                <a class="dropdown-item" href="#">Policy</a>
                                <a class="dropdown-item" href="#">Scheme</a>
                                <a class="dropdown-item" href="#">Press Release</a>
                                <a class="dropdown-item" href="#">FAQ's</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Important Links</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cantact Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown">
                                <a class="dropdown-item" href="#">Support</a>
                                <a class="dropdown-item" href="#">Cantact Detail</a>
                                <a class="dropdown-item" href="#">Feedback</a>
                                <a class="dropdown-item" href="#">Suggestion</a>
                                <a class="dropdown-item" href="#">FAQ's</a>
                            </div>
                        </li>
                        {{-- <li class="nav-item">
                     <a class="nav-link" href="#">Contact</a>
                  </li> --}}
                    </ul>


                    @if (Route::has('login'))
                        @auth
                            <form class="form-inline my-2 my-lg-0">
                                <div class="btn-group user">
                                    <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="images/user.png" alt=""> {{Auth::user()->name}}
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"> <!-- Corrected -->
                                        @if (Auth::user()->hasRole('OEM'))
                                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">OEM
                                                Dashboard</a>
                                        @else
                                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">MHI
                                                Dashboard</a>
                                        @endif
                                        <button class="dropdown-item" type="button"
                                            onclick="window.location.href='{{ route('logout') }}';">Logout</button>
                                    </div>
                                </div>
                            </form>
                        @endauth
                    @endif
                    {{-- <button class="dropdown-item" type="button" onclick="window.location.href='#';">Profile</button> --}}
                    {{-- <button class="dropdown-item" type="button" onclick="window.location.href='#';">My Policy</button> --}}
                    {{-- <button class="dropdown-item" type="button" onclick="window.location.href='#';">Logout</button> --}}
                </div>
            </div>
        </div>
    </nav>

    <!-- Nav Bar Ends here -->
    <!-- Hero Image Starts here -->

    @yield('content')


    <!-- Footer section starts here -->
    <div class="section-padding-none">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Board Of Directors</a></li>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">Insurance</a></li>
                            <li><a href="#">Claims</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                        <h5>General</h5>
                        <ul>
                            <li><a href="#">Insurance Sector In Country</a></li>
                            <li><a href="#">Types Of Insurance</a></li>
                            <li><a href="#">Motor Vehicles Act 2020</a></li>
                            <li><a href="#">Vehicle Registration</a></li>
                            <li><a href="#">About Your Vehicle Number</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                        <h5>Insurance</h5>
                        <ul>
                            <li><a href="#">Car Insurance</a></li>
                            <li><a href="#">Bike Insurance</a></li>
                            <li><a href="#">Car Insurance Claim</a></li>
                            <li><a href="#">Bike Insurance Claim</a></li>
                            <li><a href="#">Add-on Covers</a></li>
                            <li><a href="#">Car Insurance Comparison</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-sec">
                        <h5>Insurance Company Pvt. Ltd.</h5>
                        <p class="adres">34/02 Oak Street, lorem ipsum, New South block</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit quisquam.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-6">
                            <p>Copyright © 2021. All rights reserved by Company.</p>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="copyright-social">
                                <ul>
                                    <li><a href="#"><img src="images/icon_fb.png" class="img-fluid"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="images/icon_tw.png" class="img-fluid"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="images/icon_li.png" class="img-fluid"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="images/icon_yt.png" class="img-fluid"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer section ends here -->

    <!-- Bootstrap JavaScript -->

    <!-- jQuery library -->
    <script src="js/bootstrap/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/bootstrap/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Jequery -->

    <!-- owl-carousel java script -->
    <script src="js/owl-carousel/owl.carousel.js"></script>

    <!-- Swiper JS -->
    <script src="js/swiper/swiper.min.js"></script>

    <!-- Plugins JavaScripts -->
    <script src="js/plugins/plugins.js"></script>
</body>


</html>
