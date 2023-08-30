@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Tin tức</li>
@stop

@section('actions')
	<a href="{{route('admin.articles.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $articles->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên article</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($articles as $key => $article)
		    	
		    	<tr id="item-{{$article->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$article->name}}
		    		</td>
		    		<td>
		    			@if($article->photo)
                            <img src="{{image_path($article->photo->photo_path)}}" class="image-small">
                        @endif
		    		</td>
		    		<td>{{$article->description}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.articles.destroy', ['article' => $article->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $articles->links() }}	
	    </div>
    </div>
@stop