




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
         <section class="breadcrumb-area breadcrumb-style-two breadcrumb-bg" >
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="breadcrumb-content">
                         
                                
                           
                            <h2 class="title">{{$roomdetails->room_number}}</h2>
                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="breadcrumb-price text-end">
                            <p><span>{{number_format($roomdetails->total_price,0,'.','.')}}</span> / Đêm</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- room-area -->
        <section class="room-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="room-details-thumb">
                            @foreach ($images as $images)
                            {{-- <img src="{{$images->image?Storage::url($images->image):''}}" alt=""> --}}
                            <div class="room-thumb">
                                <div class="room-active-two">
                                    <img src="assets/img/room/room_img01.jpg" alt="">
                                    <img src="assets/img/room/room_img06.jpg" alt="">
                                    <img src="assets/img/room/room_img03.jpg" alt="">
                                    <img src="assets/img/room/room_img04.jpg" alt="">
                                    
                                </div>
                               
                               
                            </div>
                    
                            @endforeach

                          
                        </div>
                        <div class="room-details-content">
                            <div class="content-top">
                                <div class="left-side">
                                    <span class="type">Loại Phòng</span>
                                    <h2 class="title black-title">{{$roomtype->name}}</h2>
                                    <ul>
                                        @foreach ($packages as $package)
                                        @foreach ($package->amenities as $amenity)
                                
                                        <li></i>{{ $amenity->names }}</li>
                                    @endforeach
                                     @endforeach
                                    </ul>
                               
                                </div>
                                
                            </div>
                            <p>{{$roomdetails->description}}</p>
                        </div>
                      
                 
                      
                        <div class="review">
                            <h2 class="title black-title">reviews_</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="review-content mb-30">
                                        <div class="rating">
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                        </div>
                                        <h2 class="title black-title">We’re definitely going dark back!</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing antesetng industry. Lorem Ipsum has been the industry's ipsum is a placeholder.</p>
                                        <h4 class="title-two black-title">Toms Linkon</h4>
                                        <span>Tack Zoom, September 2022</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="review-content mb-30">
                                        <div class="rating">
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                        </div>
                                        <h2 class="title black-title">Find What You Need At Booking</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing antesetng industry. Lorem Ipsum has been the industry's ipsum is a placeholder.</p>
                                        <h4 class="title-two black-title">Camille Razat</h4>
                                        <span>Tack Zoom, September 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <aside class="room-sidebar">
                            <h2 class="title black-title">Check <br> Availability</h2>
                            <p>Book direct for our best rates guaranteed.</p>
                            <form action="#">
                                <ul>
                                    <li>
                                        <div class="form-grp">
                                            <input type="text" class="datepicker" placeholder="Check in">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp">
                                            <input type="text" class="datepicker" placeholder="Check in">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp-two">
                                            <input type="text"  placeholder="Promo code">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp-two select">
                                            <select class="custom-select">
                                                <option selected="">guests</option>
                                                <option>guests 1</option>
                                                <option>guests 2</option>
                                                <option>guests 3</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-grp-two">
                                            <input type="text" placeholder="group code">
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn">search & booking</button>
                            </form>
                            <div class="sidebar-bottom">
                                <ul>
                                    <li><a href="contact.html">can we help ?</a></li>
                                    <li><a href="tel:0123456789">+1 888 322 4755</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- room-area-end -->

        <!-- guest-area -->
        <section class="guest-area guest-bg pt-115 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-35">
                            <span class="sub-title">Special Offers</span>
                            <h2 class="title black-title">For Similar Rooms</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="stay-tab" data-bs-toggle="tab" data-bs-target="#stay"
                                    type="button" role="tab" aria-controls="stay" aria-selected="true">STAY</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dine-tab" data-bs-toggle="tab" data-bs-target="#dine" type="button"
                                    role="tab" aria-controls="dine" aria-selected="false">DINE</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="stay" role="tabpanel" aria-labelledby="stay-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img01.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Super Deluxe</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">150$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img02.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Royal Suites</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">250$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img03.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Our Dining</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">29$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img04.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Premier Deluxe</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">200$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dine" role="tabpanel" aria-labelledby="dine-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img02.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Royal Suites</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">250$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img04.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Premier Deluxe</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">200$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img03.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Our Dining</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">29$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                        <div class="guest-item">
                                            <div class="guest-thumb">
                                                <a href="room-details.html"><img src="assets/img/images/guest_img01.jpg" alt="img"></a>
                                            </div>
                                            <div class="guest-content">
                                                <div class="rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <h2 class="title black-title"><a href="room-details.html">Super Deluxe</a></h2>
                                                    </li>
                                                    <li><a href="room-details.html" class="price">150$ / NIGHT</a></li>
                                                </ul>
                                                <a href="room-details.html" class="book-now-btn">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
