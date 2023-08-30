<!-- header-area -->
<header>
    <div class="header-top-wrap">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-none d-md-block">
                    <div class="header-top-contact">
                        <ul>
                            <li><a href="tel:{{Cache::get('phone')}}"><i class="fas fa-phone-alt"></i> {{Cache::get('phone')}}</a></li>
                            <li><a href="mailto:{{Cache::get('email')}}"><i class="fas fa-envelope-open-text"></i> {{Cache::get('email')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header-top-right">
                        <ul>
                            <li class="header-time"><i class="far fa-clock"></i> Mon - Fri: 9:00 am - 06.00pm</li>
                            <li class="header-social">
                                <span>Follow :</span>
                                <a href="{{Cache::get('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{Cache::get('twitter')}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{Cache::get('pinterest')}}"><i class="fab fa-pinterest"></i></a>
                                <a href="{{Cache::get('linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{route('root')}}"><img src="/images/logo/logo.png" alt="thiet ke website"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="{{checkRouteName(['root']) ? 'active' : ""}}"><a href="{{route('root')}}">Trang chủ</a>
                                        
                                    </li>
                                    
                                    <li class="{{checkRouteName(['design']) ? 'active' : ""}} menu-item-has-children">
                                        <a href="#">Dịch vụ</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="{{route('website.design')}}">
                                                    Thiết kế website
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('company.design')}}">Thiết kế website doanh nghiệp</a>
                                            </li>
                                            <li>
                                                <a href="{{route('ecommerce.design')}}">Thiết kế website bán hàng</a>
                                            </li>
                                            <li>
                                                <a href="{{route('landing-page.design')}}">Thiết kế website landing page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{checkRouteName(['prices.index']) ? 'active' : ""}}">
                                        <a href="{{route('prices.index')}}">Bảng giá
                                        </a>                            
                                    </li>
                                    <li class="{{checkRouteName(['articles']) ? 'active' : ""}}">
                                        <a href="{{route('articles.index')}}">Tin tức
                                        </a>                            
                                    </li>
                                    
                                    <li><a href="{{route('contact.index')}}">Liên hệ</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>                                    
                                    <li class="header-btn"><a href="{{route('orders.create')}}" class="btn">Gửi yêu cầu<span></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="/images/logo/logo.png" alt="thiet ke website" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="p-2 text-center">
                                <ul>
                                    <li><a href="tel:{{Cache::get('phone')}}"><i class="fas fa-headphones"></i> {{Cache::get('phone')}}</a></li>
                                    <li><a href="mailto:{{Cache::get('email')}}"><i class="fas fa-envelope-open-text"></i> {{Cache::get('email')}}</a></li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="{{Cache::get('twitter')}}"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="{{Cache::get('facebook')}}"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="{{Cache::get('pinterest')}}"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="{{Cache::get('instagram')}}"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="{{Cache::get('youtube')}}"><span class="fab fa-youtube"></span></a></li>
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
    
</header>
<!-- header-area-end -->