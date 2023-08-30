@extends('layouts.app')

@section("title", Cache::get('design_ecommerce_title'))
@section('seo')
    <meta name=description content="{{Cache::get('design_ecommerce_description')}}">
@stop
@section('content') 
	<!-- banner-area -->
    <section class="software-banner-area banner-bg fix">
        <div class="container">
            <div class="soft-banner-wrap">   
                <div class="banner-content">
                    <div class="slider-caption">
                        <div class="inner-layer">
                            <span class="sub-title wow slideInRight" data-wow-delay=".2s">thương mại điện tử</span>
                        </div>
                    </div>
                    <div class="slider-caption">
                        <div class="inner-layer">
                            <h2 class="title wow slideInRight" data-wow-delay=".4s">
                                {{Cache::get('design_ecommerce_title')}}
                            </h2>
                        </div>
                    </div>
                    <div class="slider-caption">
                        <div class="inner-layer">
                            <p class="wow slideInRight" data-wow-delay=".6s">
                                {{Cache::get('design_ecommerce_description')}}
                            </p>
                        </div>
                    </div>
                    <div class="banner-btn wow slideInRight" data-wow-delay=".8s">
                        <a href="{{route('orders.create', ['price_id' => 2])}}" class="btn">Đăng ký ngay<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <section class="business-area card-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <h2 class="title">Tìm hiểu về lý do tại sao lại cần thiết kế trang web bán hàng online.</h2>
                <div class="container-card">
                    <div class="box-card">
                        <span></span>
                        <div class="content-card">
                            <h2>Sự thông dụng của internet</h2>
                            <p>Hiện nay hầu hết mọi người đều sử dụng internet thông qua các thiết bị như máy tính, điện thoại thông minh,...Và đa số đều có nhu cầu mua bán trực tuyến hoặc tìm hiểu về thông tin sản phẩm trước khi có ý định mua hàng.</p>
                        </div>
                    </div>
                    <div class="box-card">
                        <span></span>
                        <div class="content-card">
                            <h2>Tìm kiếm thông tin nhanh chóng</h2>
                            <p>Khách hàng không mua hàng online mà có nhu cầu đến trực tiếp cửa hàng để mua thì trang web là nơi cung cấp các thông tin về địa chỉ, khoảng cách từ người muốn mua đến vị trí cửa hàng được xuất bản trên trang web.</p>
                        </div>
                    </div>
                    <div class="box-card">
                        <span></span>
                        <div class="content-card">
                            <h2>Kênh giới thiệu sản phẩm đa dạng</h2>
                            <p>Website không chỉ bán hàng online, mà còn là nơi cung cấp đầy đủ thông tin như địa chỉ cửa hàng, thông tin sản phẩm dịch vụ, phong cách phục vụ, chất lượng của sản phẩm. Giúp khách hàng lựa chọn dễ dàng và hiệu quả hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- soft-features-area-end -->

    <!-- ecommerce-technology-area -->
    <section class="ecommerce-technology-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-end mb-20">
                    <div class="col-md-8">
                        <div class="section-title-two">
                            <h5 class="sub-title">thietkeweb99.com</h5>
                            <h2 class="title">Luôn làm vừa lòng mọi khách hàng<span>.</span></h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="soft-title-link">
                            <a href="{{route('orders.create', ['price_id' => 2])}}">Đăng ký <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="container-tech-box">
                    <div class="tech-boxs">
                        <div class="tech-box">
                            <div>
                                <div class="tech-box-text">
                                    Thiết kế giao diện cao cấp, hiệu ứng đẹp 
                                </div>
                            </div>
                        </div>
                        <div class="tech-box-footer">
                            Giao diện
                        </div>
                    </div>
                    <div class="tech-boxs">
                        <div class="tech-box">
                            <div>
                                <div class="tech-box-text">
                                    Thân thiện với người dùng, tích hợp nhiều thiết bị
                                </div>
                            </div>
                        </div>
                        <div class="tech-box-footer">
                            Responsive
                        </div>
                    </div>
                    <div class="tech-boxs">
                        <div class="tech-box">
                            <div>
                                <div class="tech-box-text">
                                    Tốc độ tải trang nhanh, trải nghiệm người dùng tốt
                                </div>
                            </div>
                        </div>
                        <div class="tech-box-footer">
                            Tốc độ
                        </div>
                    </div>
                    <div class="tech-boxs">
                        <div class="tech-box">
                            <div>
                                <div class="tech-box-text">
                                    Tính ổn định cao, bảo mật và dễ dàng quản lý
                                </div>
                            </div>
                        </div>
                        <div class="tech-box-footer">
                            Bảo mật
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
    <section class="bg-faded">
        <div class="customer-services-wrap mt-4">
            <div class="btn-register-footer">
                <p>Hãy gửi yêu cầu thiết kế cho chúng tôi, quý khách sẽ được tư vấn chi tiết về dịch vụ thiết kế website bán hàng online.</p>
                <a href="{{route('orders.create', ['price_id' => 2])}}" class="btn">Đăng ký ngay<span></span></a>
            </div>
        </div>
    </section>
@stop
