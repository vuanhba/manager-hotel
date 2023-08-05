@extends('layout.client.master')
@section('content')
    
            <!-- slider-area-end -->

         

            <!-- about-area -->
            <section class="about-area pt-120 pb-90">
                <div class="about-shape"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-8">
                            <div class="section-title mb-25">
                                <span class="sub-title">Special Offers</span>
                                <h2 class="title black-title">Enjoy a <br> Luxury <span>Experience</span></h2>
                            </div>
                            <div class="about-content">
                                <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
                                    the visual form of a
                                    document or a typeface without relying on meaniul content used placeholder.</p>
                                <div class="reservation">
                                    <div class="icon">
                                        <img src="assets/img/icon/reservation_icon.png" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4 class="title black-title">Reservation</h4>
                                        <a href="tel:012345678">555 000 8888</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-10">
                            <div class="about-img-wrap">
                                <ul>
                                    <li>
                                        <div class="about-img">
                                            <img src="assets/img/images/about_img01.jpg" alt="img">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-img round-shape-img">
                                            <img src="assets/img/images/about_img02.jpg" alt="img">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-img">
                                            <img src="assets/img/images/about_img03.jpg" alt="img">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- guest-area -->
            <section class="guest-area guest-bg pt-115 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-35">
                                <span class="sub-title">Special Offers</span>
                                <h2 class="title black-title">For Our Valued <span>Guests</span></h2>
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
                                        @foreach ($image as $room)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                            <div class="guest-item">
                                                <div class="guest-thumb">
                                                    @if ($room->featuredImage)
                                                        <a href="room-details.html"><img src="{{ Storage::url($room->featuredImage) }}" alt="img"></a>
                                                    @endif
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
                                                            <h2 class="title black-title"><a href="room-details.html">{{ $room->room_number }}</a></h2>
                                                        </li>
                                                        <li><a href="room-details.html" class="price">{{ number_format($room->total_price, 0, '.', '.') }} VND/ NIGHT</a></li>
                                                    </ul>
                                                    <a href="room-details.html" class="book-now-btn">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                  
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
                            <div class="guest-icon text-center">
                                <img src="assets/img/icon/guest_icon.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- guest-area-end -->

            <!-- area-bg -->
            <div class="area-bg">
                <!-- gallery-area -->
                <section class="gallery-area pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title text-center mb-25">
                                    <img src="assets/img/icon/section_title_icon.png" alt="img">
                                    <span class="sub-title">Special Offers</span>
                                    <h2 class="title">Discover the perfect hotel for you</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="gallery-content">
                                    <ul>
                                        <li>Guests <i class="flaticon-right-arrow"></i></li>
                                        <li class="different">Visiting</li>
                                        <li>any Roxal Destination <i class="flaticon-right-arrow"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-11 col-md-10">
                                <div class="gallery-active">
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img01.jpg" alt="img">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img02.jpg" alt="img">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img03.jpg" alt="img">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img04.jpg" alt="img">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img05.jpg" alt="img">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="assets/img/gallery/gallery_img06.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- gallery-area-end -->

                <!-- blog-area -->
                <section class="blog-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="section-title text-center mb-55">
                                    <img src="assets/img/icon/section_title_icon.png" alt="img">
                                    <span class="sub-title">DISCOVER roxal HOTELS</span>
                                    <h2 class="title">Experience the exceptional</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-lg-4 col-md-8 col-sm-10">
                                <div class="author-profile mb-30">
                                    <div class="author-thumb mb-35">
                                        <img src="assets/img/blog/author_img.png" alt="img">
                                    </div>
                                    <div class="author-content mb-30">
                                        <a href="#" class="tag">Special DINING</a>
                                        <h2 class="title">Luxury <span>Restaurant</span></h2>
                                        <p>In publishing and graphic design, Lorem ipsum is placeholder text commonly used to
                                            demorate the visual form a document a typeface without relying on meaniul content used
                                        </p>
                                    </div>
                                    <div class="reservation">
                                        <div class="icon">
                                            <img src="assets/img/icon/reservation_icon.png" alt="img">
                                        </div>
                                        <div class="content">
                                            <h4 class="title black-title">Reservation</h4>
                                            <a href="tel:012345678">555 000 8888</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7">
                                <div class="blog-item different mb-30">
                                    <span class="icon line"></span>
                                    <span class="icon right"></span>
                                    <div class="blog-thumb mb-30">
                                        <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt="img"></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="tag">Special DINING</a>
                                        <h3 class="title"><a href="blog-details.html">Collaborate and celebrate in tastefully designed</a></h3>
                                        <p>In publishing and graphic design, Lorem ipsum is placeholder text commonly used to
                                            demorate the visual form a document or a typeface without relying on meaniul meeting
                                            halls and two expansive, placeholder text commonly used to demorate the visual form a
                                            document or a typefacecolumn-free ballrooms content ipsum is placeholder used.</p>
                                        <a href="blog-details.html" class="view-btn">View Details <i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5">
                                <div class="other-blog-item">
                                    <div class="blog-item mb-35">
                                        <div class="blog-thumb mb-20">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt="img"></a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="tag">long beach</a>
                                            <h3 class="title"><a href="blog-details.html">Most Iconic Landmarks</a></h3>
                                            <p>In publishing and graphic design, Lorem ipsum is placeholder comm.</p>
                                            <a href="blog-details.html" class="view-btn">View Details <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-item mb-35">
                                        <div class="blog-thumb mb-20">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt="img"></a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="tag">long beach</a>
                                            <h3 class="title"><a href="blog-details.html">Currently open to hotel</a></h3>
                                            <p>In publishing and graphic design, Lorem ipsum is placeholder comm.</p>
                                            <a href="blog-details.html" class="view-btn">View Details <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog-area-end -->

                <!-- video-area -->
                <section class="video-area video-bg">
                    <div class="background-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="video-content">
                                    <div class="section-title text-center mb-35">
                                        <img src="assets/img/icon/section_title_icon02.png" alt="img">
                                        <span class="sub-title">DISCOVER Roxal HOTELS</span>
                                        <h2 class="title">Experience the exceptional</h2>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=s1FXjvebvRA" class="play-btn popup-video pulse"><i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- video-area-end -->

                <!-- facilities-area -->
                <section class="facilities-area pt-100 pb-90">
                    <div class="container">
                        <div class="row align-items-end mb-40">
                            <div class="col-md-8">
                                <div class="section-title">
                                    <img src="assets/img/icon/section_title_icon.png" alt="img">
                                    <span class="sub-title">DISCOVER Roxal</span>
                                    <h2 class="title">Hotel Facilities</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="view-more text-end">
                                    <a href="service.html">view more <img src="assets/img/icon/section_title_icon.png" alt="img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="facilities-item mb-30">
                                    <div class="facilities-icon">
                                        <i class="flaticon-luggage-cart"></i>
                                    </div>
                                    <div class="facilities-content">
                                        <h4 class="title"><a href="service.html">Most Baggage Hold</a></h4>
                                        <p>In publishin and graphic design ipsum is placeholder text commonly used to demorate the
                                            visual form a document or a typefac relying.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="facilities-item mb-30">
                                    <div class="facilities-icon">
                                        <i class="flaticon-wedding-dinner"></i>
                                    </div>
                                    <div class="facilities-content">
                                        <h4 class="title"><a href="service.html">Lunch & Dinner</a></h4>
                                        <p>In publishin and graphic design ipsum is placeholder text commonly used to demorate the
                                            visual form a document or a typefac relying.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="facilities-item mb-30">
                                    <div class="facilities-icon">
                                        <i class="flaticon-flower"></i>
                                    </div>
                                    <div class="facilities-content">
                                        <h4 class="title"><a href="service.html">Beauty & Spa</a></h4>
                                        <p>In publishin and graphic design ipsum is placeholder text commonly used to demorate the
                                            visual form a document or a typefac relying.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- facilities-area-end -->
            </div>
            <!-- area-bg-end -->

            <!-- service-area -->
            <section class="service-area pt-120 pb-85">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-7 col-md-6 col-sm-10">
                            <div class="section-title">
                                <img src="assets/img/icon/section_title_icon.png" alt="img">
                                <span class="sub-title">Special discover</span>
                                <h2 class="title black-title">Welcome To <br> Our Extra <span>Services</span></h2>
                            </div>
                            <div class="service-content">
                                <p>In publng and graphic design, Lorem ipsum placeholder text commonly used to demonstrate the
                                    visual form of a document or
                                    a typeface without relying on meaniul.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-md-6 col-sm-10">
                            <div class="service-item mb-35">
                                <a href="service.html"><img src="assets/img/service/service_img01.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10">
                            <div class="service-item mb-35">
                                <a href="service.html"><img src="assets/img/service/service_img02.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="service-item mb-35">
                                <a href="service.html"><img src="assets/img/service/service_img03.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                            <div class="service-item mb-35">
                                <a href="service.html"><img src="assets/img/service/service_img04.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <div class="find-all-service">
                                <img src="assets/img/icon/section_title_icon.png" alt="img">
                                <h3 class="title black-title">Find all services</h3>
                                <a href="service.html" class="btn">Find all</a>
                            </div>
                        </div>
                    </div>
                    <div class="service-shape-wrap">
                        <img src="assets/img/service/service_shape02.png" alt="img" class="shape-one heartbeat">
                        <img src="assets/img/service/service_shape01.png" alt="img" class="shape-two alltuchtopdown">
                        <img src="assets/img/service/service_shape02.png" alt="img" class="shape-three heartbeat">
                    </div>
                </div>
            </section>
            <!-- service-area-end -->

        </main>
        <!-- main-area-end -->
@endsection