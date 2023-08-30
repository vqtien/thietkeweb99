@extends('layouts.app')

@section("title", Cache::get('design_company_title'))
@section('seo')
    <meta name=description content="{{Cache::get('design_company_description')}}">
@stop
@section('content') 
	<section class="banner-area consulting-banner">
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="cons-banner-img">
                                <img src="/images/slider/h3_banner_img.png" alt="thiết kế web doanh nghiệp" class="main-img">
                                <img src="/images/slider/h3_banner_shape02.png" alt="thiết kế website doanh nghiệp" class="shape-2">
                                <img src="/images/slider/h3_banner_shape03.png" alt="thiết kế website doanh nghiệp" class="shape-3 alltuchtopdown">
                                <img src="/images/slider/h3_banner_shape04.png" alt="thiết kế website doanh nghiệp" class="shape-4">
                                <img src="/images/slider/h3_banner_shape05.png" alt="thiết kế website doanh nghiệp" class="shape-5">
                                <img src="/images/slider/h3_banner_shape06.png" alt="thiết kế website doanh nghiệp" class="shape-6 rotateme">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <span class="sub-title" data-animation="reveal-text" data-delay="1s"><span style="animation-delay: 1s;"></span>Website doanh nghiệp</span>
                                    </div>
                                </div>
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <h2 class="title" data-animation="reveal-text" data-delay="2s">
                                            <span style="animation-delay: 2s;"></span>
                                            {{Cache::get('design_company_title')}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="slider-caption">
                                    <div class="inner-layer">
                                        <p data-animation="fade-in-up" data-delay="3s">Website sẽ giúp nâng cao uy tín của doanh nghiệp, tăng khả năng mở rộng thị trường.</p>
                                    </div>
                                </div>
                                <div class="banner-btn" data-animation="fade-in-up" data-delay="3.5s">
                                    <a href="{{route('orders.create', ['price_id' => 1])}}" class="btn">Đăng ký <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cons-banner-top-shape" data-background="/images/slider/h3_banner_bg.png"></div>
        <div class="cons-banner-top-shape2"><img src="/images/slider/h3_banner_shape01.png" alt="thiết kế website doanh nghiệp" class="rotateme"></div>
    </section>
    <!-- banner-area-end -->

    <!-- cons-features-area -->
    <section class="cons-features-area">
        <div class="container">
            <div class="cons-features-bg" data-background="/images/bg/soft_features_bg.jpg">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="soft-features-item">
                            <div class="soft-features-icon">
                                <i class="flaticon-24-hours"></i>
                            </div>
                            <div class="soft-features-content">
                                <span>Lợi ích</span>
                                <h5>Cung cấp thông tin đến với khách hàng mọi lúc mọi nơi</h5>           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="soft-features-item active">
                            <div class="soft-features-icon">
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="soft-features-content">
                                <span>Hiệu quả</span>
                                <h5>Tăng tính chuyên nghiệp, uy tín cho doanh nghiệp</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="soft-features-item">
                            <div class="soft-features-icon">
                                <i class="flaticon-bar-chart"></i>
                            </div>
                            <div class="soft-features-content">
                                <span>Tiềm năng</span>
                                <h5>Mở rộng thị trường, tiếp cận nguồn khách hàng mới</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cons-features-area-end -->

    <!-- cons-services-area -->
    <section class="cons-services-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-9">
                        <div class="kb-section-title text-center mb-55">
                            <h2 class="title">Dịch vụ thiết kế website doanh nghiệp của chúng tôi<span>.</span></h2>
                            <p>Tạo ra sản phẩm vừa có thẩm mỹ, vừa mang lại hiệu quả tối đa cho doanh nghiệp của bạn.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="cons-services-item">
                            <div class="cons-services-icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="cons-services-content">
                                <h5 class="title">Bắt đầu thiết kế</h5>
                                <p>Nghiên cứu kỹ lưỡng về ngành nghề kinh doanh để đưa ra giao diện và chức năng phù hợp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="cons-services-item">
                            <div class="cons-services-icon">
                                <i class="flaticon-online-service"></i>
                            </div>
                            <div class="cons-services-content">
                                <h5 class="title">Quá trình thiết kế</h5>
                                <p>Trao đổi và tư vấn để lựa chọn ra phương án tối ưu và phù hợp nhất.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="cons-services-item">
                            <div class="cons-services-icon">
                                <i class="flaticon-clutch-disc"></i>
                            </div>
                            <div class="cons-services-content">
                                <h5 class="title">Quá trình thực hiện</h5>
                                <p>Dựa trên phương án tối ưu nhất đã được lựa chọn, tạo nên một sản phẩm chất lượng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cons-services-area-end -->

    <!-- delivering-value-area -->
    <section class="delivering-value-area pt-110 pb-70">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="kb-section-title text-center mb-55">
                            <h2 class="title">Website doanh nghiệp với nhiều ưu đãi đặc biệt.</h2>
                            <p>Ngoài việc thiết kế 1 trang web đẹp mắt và chuyên nghiệp, thietkeweb99.com còn cung cấp nhiều tiện ích miễn phí hấp dẫn.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10">
                        <div class="delivering-value-item">
                            
                            <div class="dv-content-wrap">
                                <div class="icon">
                                    <i class="fab fa-expeditedssl"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Bảo mật với SSL</h4>
                                    <p>Cung cấp chứng chỉ HTTPS miễn phí nhằm bảo mật và xây dựng uy tín website. Đồng thời giúp website được Google đánh giá xếp hạng cao hơn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10">
                        <div class="delivering-value-item">
                            
                            <div class="dv-content-wrap">
                                <div class="icon">
                                    <i class="fas fa-hdd"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Miễn phí Hosting</h4>
                                    <p>Hosting tốc độ cao, bảo mật, giúp tăng trải nghiệm của khách hàng, đồng thời tạo ấn tượng tốt đối với khách hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10">
                        <div class="delivering-value-item">
                            
                            <div class="dv-content-wrap">
                                <div class="icon"><i class="flaticon-maintenance"></i></div>
                                <div class="content">
                                    <h4 class="title">Các ứng dụng khác</h4>
                                    <p>Hỗ trợ cài đặt và sử dụng nhiều ứng dụng miễn phí, giúp tăng hiệu quả tìm kiếm cũng như quảng bá tốt hình ảnh doanh nghiệp.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- delivering-value-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="kb-section-title text-center mb-55">
                        <h2 class="title">Những lợi ích khác từ việc sở hữu trang web doanh nghiệp<span>.</span></h2>
                        
                    </div>
                </div>
            </div>
            <div class="container-inner-wrap">
                <div class="testimonial-active">
                    @foreach($articles as $article)
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cons-testi-img">
                                    <a href="{{route("articles.show", ['slug'=> $article->slug])}}">
                                        <img src="{{image_path($article->photo->photo_path)}}" alt="{{$article->name}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="cons-testi-content-wrap">
                                    
                                    <div class="cons-testi-content">
                                        <h4 class="title">
                                            <a href="{{route("articles.show", ['slug'=> $article->slug])}}">
                                                {{$article->name}}
                                            </a>
                                        </h4>
                                        <p>{{$article->description}}</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                    
                </div>
                <div class="testimonial-slider-nav"></div>
                <div class="testimonial-img-wrap">
                    <ul>
                        @foreach($articles as $key => $article)
                        @php
                            if($key == 0){
                                $width = 68;
                                $height = 68;
                            }
                            elseif($key == 1){                                
                                $width = 50;
                                $height = 50;
                            }
                            elseif($key == 2){                                
                                $width = 79;
                                $height = 79;
                            }
                            elseif($key == 3){                                
                                $width = 53;
                                $height = 53;
                            }
                        @endphp
                        <li>
                            <img src="{{image_path($article->photo->photo_path)}}" alt="{{$article->name}}" width="{{$width}}" height="{{$height}}">
                        </li>                        
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="testi-top-shape" data-background="/images/images/cons_testi_shape01.png"></div>
        <div class="testi-bottom-shape" data-background="/images/images/cons_testi_shape02.png"></div>
    </section>
    <!-- testimonial-area-end -->


    <!-- customer-services-area -->
    <section class="customer-services">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-9">
                        <div class="kb-section-title text-center mb-55">
                            <h2 class="title">Một trang web dành cho doanh nghiệp<span>.</span></h2>
                            <p>Với đầy đủ các tính năng và hiệu ứng, sẽ làm vừa lòng khách hàng, giúp khách hàng khai thác tối đa hiệu quả từ trang web.</p>
                        </div>
                    </div>
                </div>
                <div class="customer-services-wrap">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="customer-services-item">
                                <div class="customer-services-top">
                                    <div class="icon">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                    <div>
                                        <h4 class="title">Giao diện chuyên biệt</h4>
                                        <p>Chúng tôi tạo ra những thiết kế đặc trưng cho từng sản phẩm nhất định.</p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-services-item">
                                <div class="customer-services-top">
                                    <div class="icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <div>
                                        <h4 class="title">
                                            Thân thiện với thiết bị
                                        </h4>                                 
                                        <p>Sử dụng tốt trên mọi thiết bị, máy tính, điện thoại, máy tỉnh bảng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-services-item">
                                <div class="customer-services-top">
                                    <div class="icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div>
                                        <h4 class="title">
                                            Tốc độ làm nên thành công
                                        </h4>
                                        <p>Tốc độ tải trang web nhanh giúp người dùng trải nghiệm các chức năng tốt nhất.</p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="customer-services-item">
                                <div class="customer-services-top">
                                    <div class="icon">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div>
                                        <h4 class="title">Tính ổn định</h4>
                                        <p>Sử dụng những công nghệ tiên tiến giúp trang web hoạt động ổn định và bảo mật.</p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-services-wrap mt-4">
                    <div class="btn-register-footer">
                        <p>Hãy gửi yêu cầu thiết kế cho chúng tôi, quý khách sẽ được tư vấn chi tiết về dịch vụ thiết kế website doanh nghiệp.</p>
                        <a href="{{route('orders.create', ['price_id' => 1])}}" class="btn">Đăng ký ngay<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>   

@stop
@section('footer_form')
    @include('layouts/form_footer')  
@stop