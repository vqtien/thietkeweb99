@extends('layouts.app')

@section("title", Cache::get('design_title'))
@section('seo')
    <meta name=description content="{{Cache::get('design_description')}}">
@stop
@section('content') 
	<!-- banner-area -->
    <section class="software-banner-area banner-bg fix">
        <div class="container">
            <div class="soft-banner-wrap">
                <div class="software-banner-shape">
                    <img src="/images/slider/banner_two_shape.png" class="alltuchtopdown" alt="Thiết kế website giá rẻ">
                </div>
                <div class="software-banner-img">
                    <img src="/images/slider/banner_two_img.png" alt="Thiết kế website">
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="slider-caption">
                                <div class="inner-layer">
                                    <span class="sub-title wow slideInRight" data-wow-delay=".2s">design</span>
                                </div>
                            </div>
                            <div class="slider-caption">
                                <div class="inner-layer">
                                    <h2 class="title wow slideInRight" data-wow-delay=".4s">
                                        {{Cache::get('design_title')}}
                                    </h2>
                                </div>
                            </div>
                            <div class="slider-caption">
                                <div class="inner-layer">
                                    <p class="wow slideInRight" data-wow-delay=".6s">
                                        {{Cache::get('design_description')}}
                                    </p>
                                </div>
                            </div>
                            <div class="banner-btn wow slideInRight" data-wow-delay=".8s">
                                <a href="{{route('contact.index')}}" class="btn">Liên hệ ngay<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- soft-features-area -->
    <section class="soft-features-area" data-background="/images/bg/soft_features_bg.jpg">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="soft-features-item">
                        <div class="soft-features-icon">
                            <i class="flaticon-money-growth"></i>
                        </div>
                        <div class="soft-features-content">
                            <span>design</span>
                            <h5>
                                Website doanh nghiệp
                                
                            </h5>
                            <a href="{{route('orders.create', ['price_id' => 1])}}" class="read-more">Đăng ký <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="soft-features-item active">
                        <div class="soft-features-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="soft-features-content">
                            <span>design</span>
                            <h5>
                                Website bán hàng
                                
                            </h5>
                            <a href="{{route('orders.create', ['price_id' => 2])}}" class="read-more">Đăng ký <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="soft-features-item">
                        <div class="soft-features-icon">
                            <i class="flaticon-bar-chart"></i>
                        </div>
                        <div class="soft-features-content">
                            <span>design</span>
                            <h5>
                                Website Landingpage
                               
                            </h5>
                            <a href="{{route('orders.create', ['price_id' => 5])}}" class="read-more">Đăng ký <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- soft-features-area-end -->

    <!-- soft-services-area -->
    <section class="soft-services-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-end mb-50">
                    <div class="col-md-8">
                        <div class="section-title-two">
                            <h5 class="sub-title">thietkeweb99.com</h5>
                            <h2 class="title">Luôn làm vừa lòng mọi khách hàng<span>.</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="soft-title-link">
                            <a href="{{route('orders.create')}}">Bắt đầu ngay <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row soft-services-wrap justify-content-center">
                    <div class="col">
                        <div class="soft-services-item">
                            <div class="soft-services-icon">
                                <img src="/images/icon/soft_services_icon01.png" alt="Thiết kế cao cấp">
                            </div>
                            <div class="soft-services-content">
                                <h6>
                                    Thiết kế cao cấp, hiệu ứng bố cục đẹp
                                    
                                </h6>                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="soft-services-item">
                            <div class="soft-services-icon">
                                <img src="/images/icon/soft_services_icon02.png" alt="phù hợp mọi thương hiệu">
                            </div>
                            <div class="soft-services-content">
                                <h6>
                                    Phù hợp với mọi thương hiệu và ngành nghề    
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="soft-services-item">
                            <div class="soft-services-icon">
                                <img src="/images/icon/soft_services_icon03.png" alt="website thân thiện người dùng">
                            </div>
                            <div class="soft-services-content">
                                <h6>
                                    Thân thiện với người dùng, tích hợp nhiều thiết bị
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="soft-services-item">
                            <div class="soft-services-icon">
                                <img src="/images/icon/soft_services_icon04.png" alt="tốc độ tải trang nhanh">
                            </div>
                            <div class="soft-services-content">
                                <h6>
                                    Tốc độ tải trang nhanh, trải nghiệm người dùng tốt 
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="soft-services-item">
                            <div class="soft-services-icon">
                                <img src="/images/icon/soft_services_icon05.png" alt="website ổn định và bảo mật">
                            </div>
                            <div class="soft-services-content">
                                <h6>
                                    Ổn định, bảo mật và dễ dàng quản lý
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- soft-services-area-end -->

    <!-- business-area -->
    <section class="business-area business-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="business-img-wrap">
                            <img src="/images/images/business_img_shape01.png" alt="Quy trình thiết kế website" class="top-shape">
                            <img src="/images/images/tiep-nhan-thong-tin-khach-hang.jpg" alt="Quy trình thiết kế trang web" class="main-img">
                            <img src="/images/images/business_img_shape02.png" alt="Quy trình thiết kế" class="bottom-shape alltuchtopdown">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="business-content-wrap">
                            <div class="section-title">
                                <span class="sub-title">
                                    Quy trình thiết kế
                                </span>
                                <h2 class="title">
                                    Vận hành theo thời đại công nghệ 
                                    <span>4.0</span>
                                </h2>
                            </div>
                            <p>Tự động, từ xa, an toàn dữ liệu, bảo mật thông tin, nhanh chóng.</p>
                            <div class="business-content-list">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        <div class="content">
                                            <h5>Nhận yêu cầu</h5>
                                            <p>Khách hàng cung cấp yêu cầu thiết kế qua các kênh khác nhau.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        <div class="content">
                                            <h5>Xử lý và đồng bộ</h5>
                                            <p>Tiếp nhập, xử lý yêu cầu khách hàng và đưa ra các giải pháp.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        <div class="content">
                                            <h5>Thỏa thuận và thống nhất</h5>
                                            <p>Thỏa thuận phương án tối ưu, thống nhất chi phí và thời gian thự hiện.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- business-area-end -->

    <!-- lợi ích của website -->
    <section class="team-area team-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-8">
                        <div class="kb-section-title text-center white-title mb-55">
                            <h2 class="title">Tại sao cần tạo trang web của riêng bạn<span>?</span></h2>
                            <p>{{Cache::get('reason_design')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($articles as $article)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="{{route("articles.show", ['slug'=> $article->slug])}}">
                                    <img src="{{image_path($article->photo->photo_path)}}" alt="{{$article->name}}">
                                </a>
                                <span class="thumb-bg"></span>
                            </div>
                            <div class="team-content">
                                <h5>
                                    <a href="{{route("articles.show", ['slug'=> $article->slug])}}">
                                        {{$article->name}}
                                    </a>
                                </h5>
                                <p>{{$article->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!-- Bảng giá -->
    <section class="delivering-value-area pt-110 pb-70">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="kb-section-title text-center mb-55">
                            <h2 class="title">Bảng giá thiết kế.</h2>
                            <p>{{Cache::get('price_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($prices as $price)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="delivering-value-item">
                            <div class="dv-content-wrap">
                                <div class="content">
                                    <h4 class="title">
                                        {{$price->name}}
                                    </h4>
                                    <p class="price-description">
                                        {{$price->description}}
                                    </p>
                                    <div class="price-price">
                                        <span>{{price_format($price->price)}}
                                        </span> vnđ
                                    </div>
                                    <div class="center">
                                        <a href="{{route('orders.create', ['price_id' => $price->id])}}" class="btn">Đăng ký
                                            <i class="fas fa-caret-right"></i>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </section>    
@stop
@section('footer_form')
    @include('layouts/form_footer')  
@stop