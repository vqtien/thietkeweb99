@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Danh mục blog</li>
@stop

@section('actions')
	<a href="{{route('admin.blog-types.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
	
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên danh mục</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($blog_types as $key => $blog_type)
		    	
		    	<tr id="item-{{$blog_type->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$blog_type->name}}
		    		</td>
		    		
		    		<td>{{$blog_type->description}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.blog-types.edit', ['blog_type' => $blog_type->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.blog-types.destroy', ['blog_type' => $blog_type->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	
    </div>
@stop