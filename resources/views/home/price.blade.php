@extends('layouts.app')

@section("title", "Bảng giá thiết kế website")
@section('seo')
    <meta name=description content="{{Cache::get('price_content')}}">
@stop
@section('content') 
    <!-- Bảng giá -->
    <section class="delivering-value-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="kb-section-title text-center mb-55">
                            <h2 class="title">Bảng giá thiết kế website.</h2>
                            <p>{{Cache::get('price_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($prices as $price)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 mb-10">
                        <div class="delivering-value-item price-table">
                            <div class="dv-content-wrap">
                                <div class="content">
                                    <h4 class="title price-table">
                                        {{$price->name}}
                                    </h4>
                                    <p class="price-description">
                                        {{$price->description}}
                                    </p>
                                    <div class="price-price">
                                        @if($price->price > 0)
                                            <span>{{price_format($price->price)}}
                                            </span> vnđ
                                        @else
                                            <span>Liên hệ</span>
                                        @endif
                                    </div>
                                    <div class="price-property">
                                        <ul>
                                        @foreach($price->properties as $property)
                                        <li>
                                            {{$property->name}}
                                        </li>
                                        @endforeach
                                        </ul>
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