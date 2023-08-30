@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">Thuộc tính website</li>
@stop

@section('actions')
	<a href="{{route('admin.properties.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên thuộc tính</th> 
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($properties as $key => $property)
		    	
		    	<tr id="item-{{$property->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>	
		    		<td>
		    			{{$property->name}}
		    		</td>
		    		<td>{{$property->description}}</td>
		    			
		    		<td class="text-center">
		    			<a href="{{ route('admin.properties.edit', ['property' => $property->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.properties.destroy', ['property' => $property->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
    </div>
@stop