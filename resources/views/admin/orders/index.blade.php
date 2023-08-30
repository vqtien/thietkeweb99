@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Đơn hàng</li>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $orders->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên Khách</th>  
				<th>Điện thoại</th>
				<th>Email</th>
				<th>Mô tả</th>
				<th>Ngày đặt</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($orders as $key => $order)
		    	
		    	<tr id="item-{{$order->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			<a href="{{route('admin.orders.show', ['order'=> $order->id])}}">
		    				{{$order->name}}
		    			</a> 
		    		</td>
		    		<td>
		    			{{$order->phone}}
		    		</td>
		    		<td>{{$order->email}}</td>
		    		<td>{{$order->description}}</td>
		    		<td>
		    			{{$order->created_at}}
		    		</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.orders.show', ['order' => $order->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Xem</a>
			    		<a href="{{ route('admin.orders.destroy', ['order' => $order->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $orders->links() }}	
	    </div>
    </div>
@stop