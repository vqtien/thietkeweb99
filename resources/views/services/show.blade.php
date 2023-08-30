@extends('layouts.app')

@section("title", $service->title)
@section('seo')
    <meta name=description content="{{$service->description}}">
@stop
@section('content') 
	<section class="breadcrumb-area breadcrumb-list">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content  breadcrumb-list-content">
                            <h1 class="title">{{$service->name}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    	<a href="{{route('root')}}">
	                                    	Trang chủ
	                                    </a>
                                    </li>                                
                                    <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-details-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">                        
                        <div class="services-details-content">
                            
                            <h2 class="title">{{$service->title}}</h2>

                            @if($service->photo)
                            <div class="blog-full-image mt-2 mb-2">
                                <img src="{{image_path($service->photo->photo_path)}}" alt="{{$service->name}}">                                    
                            </div>
                            @endif

                            {!!$service->content!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop