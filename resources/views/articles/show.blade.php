@extends('layouts.app')

@section("title", $article->name)
@section('seo')
    <meta name=description content="{{$article->description}}">
@stop
@section('content') 
	<section class="breadcrumb-area breadcrumb-list">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content  breadcrumb-list-content">
                            <h1 class="title">{{$article->name}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    	<a href="{{route('root')}}">
	                                    	Trang chủ
	                                    </a>
                                    </li>                                
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="{{route('articles.index')}}">Tin tức</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-area blog-gray-bg">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="services-details-content">
                            
                            <h2 class="title">{{$article->name}}</h2>
                            
                            {!!$article->content!!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10">
                        
                        @include('articles/right')
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@stop