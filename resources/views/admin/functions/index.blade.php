@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">Chức năng website</li>
@stop

@section('actions')
	<a href="{{route('admin.web-functions.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên chức năng</th> 
				<th>Giá</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($functions as $key => $function)
		    	
		    	<tr id="item-{{$function->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>	
		    		<td>
		    			{{$function->name}}
		    		</td>
		    		<td>{{price_format($function->price)}}</td>
		    		<td>{{$function->description}}</td>
		    			
		    		<td class="text-center">
		    			<a href="{{ route('admin.web-functions.edit', ['web_function' => $function->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.web-functions.destroy', ['web_function' => $function->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
    </div>
@stop