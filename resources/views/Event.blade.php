<x-app-layout>
    <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Template</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    {{-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="#">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                <li><span class="icon_phone"></span> (123) 456-78-910</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="img/lan.png" alt="">
            <span>English</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                            <li><span class="icon_phone"></span> (123) 456-78-910</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                            <div class="header__top__language">
                                <img src="img/lan.png" alt="">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>English</li>
                                    <li>Bangla</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./rooms.html">Rooms</a></li>
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./about.html">About Us</a></li>
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="./blog.html">News</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="#">Book Now <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    @foreach($banner as $b)
    <div class="breadcrumb-option set-bg" data-setbg="images/{{ $b->images }}">
    @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Our Event</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                @foreach($eventbaner as $eb)
                    <div class="blog__item__large">
                        <div class="blog__item__large__pic">
                            <div class="event__pic__item set-bg" data-setbg="images/{{ $eb->images }}"></div>
                            <div class="tag">{{ $eb->name }}</div>
                        </div>
                        <div class="blog__item__large__text">
                            <p><i class="fa fa-eye"></i> Lượt truy cập : {{ $eb->views_count }}</p>
                            <h4><a href="{{ route('Event.show', $eb->id) }}">{{ $eb->title }}</a></h4>
                            <p>{{ $eb->venue }}</p>
                        </div>
                    </div>
                @endforeach
                    <div class="row">
                    @foreach($event as $e)
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <div class="event__pic__item set-bg" data-setbg="images/{{ $e->images }}"></div>
                                    <div class="tag">{{ $e->name }}</div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-eye"></i> Lượt truy cập : {{ $e->views_count }}</p>
                                    @if($e->Status == 'Active' ) 
                                    <h5><a href="{{ route('Event.show', $e->id) }}">{{ $e->title }}</a></h5>
                                    <p>{{ $e->venue }}</p>
                                    @else
                                    <p style="color: red">The event has been booked</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    
                    </div>

                    
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="blog__sidebar">
                        
                        <div class="blog__sidebar__search">
                            <h4>Search</h4>
                            <form action="{{ route('Event.index') }}" method="GET">
                                <input type="text" name="keyword" placeholder="Search...">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h4>Recent Events</h4>
                            @foreach($eventnew as $n)
                            <a href="{{ route('Event.show', $n->id) }}" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <div class="eventnew__pic__item set-bg" data-setbg="images/{{ $n->images }}"></div>
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>{{ $n->name }}</h6>
                                    <p class="time">{{ $n->venue }}</p>
                                    <div class="time"><i class="fa fa-eye"></i> Lượt truy cập : {{ $n->views_count }}</div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        {{-- <div class="blog__sidebar__categories">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Life Style</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Work</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Sport</a></li>
                            </ul>
                        </div> --}}
                        <div class="blog__sidebar__comment">
                            <h4>Recent Comments</h4>
                            <p>Attending a trade show can be a very effective method of promoting your company and its
                            </p>
                            <span>Smart HVAC Solutions Keep It Comfortable</span>
                            <p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At
                                that</p>
                            <span>Guests think these services would be easier</span>
                            <p>Classifieds are usually the first place you think of when you are getting ready to make a
                            </p>
                            <span>Europe's 2018 hotel strengths belie</span>
                        </div>
                        {{-- <div class="blog__sidebar__tags">
                            <h4>Popular Tags</h4>
                            <a href="#">Creative</a>
                            <a href="#">Unique</a>
                            <a href="#">Travel</a>
                            <a href="#">Restaurant</a>
                            <a href="#">Workpress Template</a>
                            <a href="#">Idea</a>
                            <a href="#">Hotel</a>
                        </div> --}}
                    </div>
                </div>
                {{ $event->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-1.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-2.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-3.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-4.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="img/logo.png" alt=""></a>
                            </div>
                            <h4>(123) 456-78-91096</h4>
                            <ul>
                                <li>Ernser Vista Suite 437, NY</li>
                                <li>Info.colorlib@gmail.com</li>
                            </ul>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Room</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Subscribe our newlatester</h4>
                            <form action="#">
                                <input type="text" placeholder="Your E-mail Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                    <a href="#"><i class="fa fa-map-o"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-forumbee"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
</x-app-layout>
    