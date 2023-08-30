@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">Bảng giá</li>
@stop

@section('actions')
	<a href="{{route('admin.prices.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên danh sách</th>  
				<th>Giá thiết kế</th>
				<th>Thời hạn thiết kế</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($prices as $key => $price)
		    	
		    	<tr id="item-{{$price->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>	
		    		<td>
		    			{{$price->name}}
		    		</td>
		    		<td>{{price_format($price->price)}}</td>
		    		<td>{{$price->deadline}}</td>
		    		<td>{{$price->description}}</td>		    		
		    		<td class="text-center">
		    			<a href="{{ route('admin.prices.edit', ['price' => $price->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.prices.destroy', ['price' => $price->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
    </div>
@stop