<nav class="menu-nav">
    <div class="logo">
        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
    </div>
    <div class="navbar-wrap main-menu d-none d-lg-flex">
        <ul class="navigation">
            <li class="active menu-item-has-children"><a href="#">Home</a>
                <ul class="submenu">
                    <li class="active"><a href="index.html">Home One</a></li>
                    <li><a href="index-2.html">Home Two</a></li>
                    <li><a href="index-3.html">Home three</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="#">Rooms</a>
                <ul class="submenu">
                    @foreach ($roomTypeMenu as $item)
                         <li><a href="{{route('roomList',['id'=>$item->id])}}">{{$item->name}}</a></li>
                 
                    @endforeach
                   


                </ul>
            </li>

            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Service</a></li>
            <li class="menu-item-has-children"><a href="#">News</a>
                <ul class="submenu">
                    <li><a href="blog.html">Our Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="header-action d-none d-md-block">
        <ul>
            <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
            <li class="header-btn"><a href="room-details.html" class="btn">booking now</a></li>
        </ul>
    </div>
</nav>