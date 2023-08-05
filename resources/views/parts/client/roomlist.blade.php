




<!doctype html>
<html class="no-js" lang="EN">
    
<!-- Mirrored from themehut.co/preview/html/roxal/roxal/roxal/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 05:06:37 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Roxal - Hotel Booking HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
    <base href="/client/">
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area menu-style-three menu-style-four transparent-header">
                <div class="container-fulid">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                @include('parts.client.menu')
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo_2.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->
        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="breadcrumb-content">
                                <h2 class="title">our rooms</h2>
                                <p>welcome to paradise</p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- room-area -->
            <section class="room-area">
                <div class="container">
                    <div class="row align-items-center justify-content-center mb-60">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2 class="title black-title">Availability and Rates</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="room-content-top">
                                <i class="flaticon-sun"></i>
                                <p><span>Book with peace of mind</span> Cancel your reservation up to 3 days before check-in for a full refund</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-10">
                            @foreach ($rooms as $room)
                            <div class="room-item wow fadeInUp"  data-wow-delay=".4s">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="room-thumb">
                                            <div class="room-active-two">
                                                @foreach ($images as $image)
                                                @if ($image->id === $room->id)
                                                    <img src="{{ Storage::url($image->image) }}" alt="img">
                                                @endif
                                            @endforeach
                                            </div>
                                            <a href="#" class="room-gallery"><i class="flaticon-picture"></i>4</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="room-content">
                                            <div class="content-top">
                                              
                                                <h3 class="title black-title"><a href="{{route('roomDetails',['id'=>$room->id])}}">{{$room->room_number}}</a></h3>
                                                    
                                              
                                                <p class="price"><span>{{number_format($room->total_price,0,'.','.')}}vnđ</span>Đêm</p>
                                            </div>
                                           
                                            <div class="content-bottom">
                                                <div class="row align-items-end">
                                                    <div class="col-md-8">
                                                        <div class="room-features">
                                                            <h5 class="title">Tiện ích</h5>
                                                            <ul>
                                                                @foreach ($packages as $package)
                                                            @foreach ($package->amenities as $amenity)
                                                    
                                                            <li></i>{{ $amenity->names }}</li>
                                                        @endforeach
                                                         @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="room-details-btn text-end">
                                                            <a href="{{route('roomDetails',['id'=>$room->id])}}" class="btn">sELECT DATES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        
                        </div>
                        <div class="col-xl-12 col-md-10">
                            <div class="pagination-wrap">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev <i class="fa-solid fa-angles-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i>Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- room-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-area footer-style-two">
                <div class="footer-newsletter newsletter-bg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="footer-logo text-center mb-10">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="newsletter-content text-center">
                                    <span>five star hotel discover</span>
                                    <h2 class="title">GET NEWS & OFFERS subscribe us</h2>
                                    <form action="#" class="newsletter-form">
                                        <input type="email" placeholder="Enter your email address">
                                        <button type="submit">subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="footer-top-left">
                                    <div class="footer-icon">
                                        <img src="assets/img/icon/section_title_icon.png" alt="img">
                                    </div>
                                    <div class="footer-content">
                                        <h4 class="title">Roxal hotel</h4>
                                        <ul>
                                            <li>Tel: <a href="tel:123456789">+01 222 999 1414</a></li>
                                            <li>E-mail: <a href="#">roxal@exemple.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-top-right">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitch"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="copyright-text">
                                    <p>| Copyright © 2022 <a href="#">Roxal</a>. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="footer-lang text-end">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icon/united-states.png" alt=""> English
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index.html"><img src="assets/img/icon/russia.png" alt="">Russia</a>
                                            <a class="dropdown-item" href="index.html"><img src="assets/img/icon/thailand.png" alt="">Thailand</a>
                                            <a class="dropdown-item" href="index.html"><img src="assets/img/icon/india.png" alt="">India</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





        <!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themehut.co/preview/html/roxal/roxal/roxal/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 05:06:40 GMT -->
</html>
