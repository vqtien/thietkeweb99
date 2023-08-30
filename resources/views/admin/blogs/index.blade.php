@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Blog</li>
@stop

@section('actions')
	<a href="{{route('admin.blogs.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $blogs->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên blog</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($blogs as $key => $blog)
		    	
		    	<tr id="item-{{$blog->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$blog->name}}
		    		</td>
		    		<td>
		    			@if($blog->photo)
                            <img src="{{image_path($blog->photo->photo_path)}}" class="image-small">
                        @endif
		    		</td>
		    		<td>{{$blog->description}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.blogs.edit', ['blog' => $blog->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.blogs.destroy', ['blog' => $blog->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $blogs->links() }}	
	    </div>
    </div>
@stop