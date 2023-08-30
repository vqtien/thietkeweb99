@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">Công nghệ</li>
@stop

@section('actions')
	<a href="{{route('admin.technologies.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên công ghệ</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th>Ngày tạo</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($technologies as $key => $technology)
		    	
		    	<tr id="item-{{$technology->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>	  	
		    		<td>
		    			{{$technology->name}}
		    		</td>
		    		<td></td>
		    		<td>{{$technology->description}}</td>
		    		<td>{{$technology->created_at}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	   
    </div>
@stop