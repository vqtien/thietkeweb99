@extends('layouts.app')

@section("title", "Công nghệ thiết kế website")
@section('seo')
    <meta name=description content="{{Cache::get('technology_content')}}">
@stop
@section('content') 
	

    <!-- services-area -->
    <section class="kb-services-area">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="kb-section-title text-center mb-25">
                            <h2 class="title">
                                {{Cache::get('technology_title')}}
                            </h2>
                            <p>{{Cache::get('technology_content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($technologies as $technology)
                        @if($technology->slug)
                            <a ref="nofollow" target="_blank" href="{{$technology->slug}}" class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="kb-services-item technology-item">                            
                                    <div class="icon">
                                        <i class="{{$technology->class_icon}}"></i>
                                    </div>
                                    <div class="content">
                                        <h5>{{$technology->name}}</h5>
                                        <p>{{$technology->description}}</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="kb-services-item technology-item">                            
                                    <div class="icon">
                                        <i class="{{$technology->class_icon}}"></i>
                                    </div>
                                    <div class="content">
                                        <h5>{{$technology->name}}</h5>
                                        <p>{{$technology->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-emd -->

   
@stop