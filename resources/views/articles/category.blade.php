@extends('layouts.app')

@section("title", $category->name)
@section('seo')
    <meta name=description content="{{$category->name}}">
@stop
@section('content') 
	<section class="breadcrumb-area breadcrumb-list">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content breadcrumb-list-content">
                            <h1 class="title">{{$category->name}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    	<a href="{{route('root')}}">
	                                    	Trang chủ
	                                    </a>
                                    </li>                                
                                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
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
                        @foreach($articles as $article)
                        <div class="standard-blog-item mb-50">
                            <div class="blog-thumb">
                                <a href="{{route('articles.show', ['slug' => $article->slug])}}">
                                    <img src="{{image_path($article->photo->photo_path)}}" alt="{{$article->name}}">
                                </a>
                            </div>
                            <div class="standard-blog-content">
                                <h4 class="title">
                                    <a href="{{route('articles.show', ['slug' => $article->slug])}}">
                                        {{$article->name}}
                                    </a>
                                </h4>
                                <ul class="standard-blog-meta">
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                    <li><a href="#"><i class="far fa-calendar"></i>{{time_format($article->created_at)}}</a></li>
                                    <li><a href="#"><i class="far fa-comment-alt"></i>0 Comments</a></li>
                                </ul>
                                <p>{{$article->description}}</p>                            
                                <a href="{{route('articles.show', ['slug' => $article->slug])}}" class="btn read-more mt-3">Xem thêm</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-10">
                        @include('articles/right')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@stop