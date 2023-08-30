@extends('layouts.app')

@section("title", Cache::get('site_name'))

@section('seo')
    <meta name=description content="{{Cache::get('meta_description')}}">
@stop

@section('content')  
	<!-- banner-area -->
    <section class="banner-area banner-bg">
        <div class="slider-home slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="banner-img">
                                <img src="/images/slider/banner_img.png" class="main-img" alt="design">
                                <img src="/images/slider/kb_slider_shape01.png" alt="design" class="shape-1">
                                <img src="/images/slider/kb_slider_shape02.png" alt="design" class="shape-2">
                                <img src="/images/slider/kb_slider_shape03.png" alt="design" class="shape-3">
                                <img src="/images/slider/kb_slider_shape04.png" alt="design" class="shape-4 alltuchtopdown">
                                <img src="/images/slider/kb_slider_shape05.png" alt="design" class="shape-5 alltuchtopdown">
                                <img src="/images/slider/kb_slider_shape06.png" alt="design" class="shape-6">
                                <img src="/images/slider/kb_slider_shape07.png" alt="design" class="shape-7 rotateme">
                                <img src="/images/slider/kb_slider_shape08.png" alt="design" class="shape-8 rotateme">
                                <img src="/images/slider/kb_slider_shape09.png" alt="design" class="shape-9">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <span class="sub-title" data-animation="reveal-text" data-delay="1s"><span style="animation-delay: 1s;"></span>Thiết kế website</span>
                                    </div>
                                </div>
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <h2 class="title" data-animation="reveal-text" data-delay="2s">
                                            <span style="animation-delay: 2s;"></span>
                                            {{Cache::get('welcome_title')}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <p data-animation="fade-in-up" data-delay="3s">
                                            {{Cache::get('welcome_content')}}
                                        </p>
                                    </div>
                                </div>
                                <div class="banner-btn" data-animation="fade-in-up" data-delay="3.5s">
                                    <a href="{{route('orders.create')}}" class="btn"><i class="far fa-paper-plane"></i> Gửi yêu cầu thiết kế <span></span></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- brand-area -->
    <div class="brand-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-wrapper">
                            <h2 class="title">Đối tác, khách hàng</h2>
                            <div class="brand-active">
                                @foreach($customers as $customer)
                                <div class="brand-item">
                                    @if($customer->description)
                                        <a ref="nofollow" href="{{$customer->description}}">
                                            
                                        <img alt="{{ $customer->name}}" src="{{image_path($customer->photo->photo_path)}}" alt="{{$customer->name}}">   
                                        </a>
                                    @else
                                        <img alt="{{ $customer->name}}" src="{{image_path($customer->photo->photo_path)}}" alt="{{$customer->name}}">   
                                    @endif                                 
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- technology-area -->
    @php 
        $limit_technologies = $technologies->take(4);
        $last_technologies = $technologies->take(-1);
    @endphp
    <section class="features-area pt-60 pb-30">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class="row features-item-wrap">
                            @foreach($limit_technologies as $technology)
                            @if($technology->slug)
                                <a ref="nofollow" target="_blank" href="{{$technology->slug}}" class="col-md-6">
                                    <div class="features-item-box mb-30">
                                        <div class="features-item-icon">
                                            <i class="{{$technology->class_icon}}"></i>
                                        </div>
                                        <div class="features-item-content">
                                            <h4>{{$technology->name}}</h4>
                                            <p>{{$technology->description}}</p>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <div class="col-md-6">
                                    <div class="features-item-box mb-30">
                                        <div class="features-item-icon">
                                            <i class="{{$technology->class_icon}}"></i>
                                        </div>
                                        <div class="features-item-content">
                                            <h4>{{$technology->name}}</h4>
                                            <p>{{$technology->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach                            
                            <div class="features-top-shape"><img src="/images/images/features_shape01.png" alt="Công nghệ website"></div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="features-content-wrap">
                            <div class="features-title">
                                <span class="sub-title">Phần cứng</span>
                                <h2 class="title">
                                    {{Cache::get('technology_title')}}
                                </h2>
                            </div>
                            <p>{{Cache::get('technology_content')}}</p>
                            <div class="features-list">
                                <ul>
                                    @foreach($last_technologies as $tech)
                                    <li>
                                        <div class="icon"><i class="{{$tech->class_icon}}"></i></div>
                                        <div class="content">
                                            <h5>{{$tech->name}}</h5>
                                            <p>{{$tech->description}}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="{{route('technologies.index')}}" class="btn"><i class="far fa-eye"></i> Xem thêm tính năng <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-right-shape"><img src="/images/images/features_shape02.png" alt="technology-title"></div>
    </section>
    <!-- technology-area-end -->

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

    <!-- services-area -->
    <section class="kb-services-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="kb-section-title text-center mb-25">
                            <h2 class="title">
                                {{Cache::get('website_type_title')}}
                            </h2>
                            <p>{{Cache::get('website_type_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($website_types as $website_type)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="kb-services-item">
                            <div class="icon">
                                <i class="{{$website_type->class_icon}}"></i>
                            </div>
                            <div class="content">
                                <h5>{{$website_type->name}}</h5>
                                <p>{{$website_type->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-emd -->

    <!-- online-support-area -->
    <section class="online-support-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="online-support-img">
                            <img src="/images/images/support_img.png" alt="Hỗ trợ thiết kế website">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="online-support-content">
                            <h2 class="title">
                                {{Cache::get('support_online')}}
                            </h2>
                            <p>{{Cache::get('support_online_content')}}</p>
                            <div class="support-info-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="support-info-item">
                                            <p>Thời gian hỗ trợ</p>
                                            <h2><i class="flaticon-clockwise"></i> 24/7</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="support-info-item">
                                            <p>Khách hàng hài lòng</p>
                                            <h2><i class="flaticon-happy"></i> 98.9%</h2>
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
    <!-- online-support-area-end --> 
@stop

@section('footer_form')
    @include('layouts/form_footer')  
@stop