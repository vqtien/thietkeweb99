@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">Đơn hàng</li>
    <li class="breadcrumb-item active">Đơn hàng {{$order->id}}</li>
@stop

@section('content') 
	<div class="mt-3">
	    <ul>
	    	<li>
    			Họ tên: {{$order->name}}
    		</li>
    		<li>
    			Điện thoại: {{$order->phone}}
    		</li>
    		<li>
    			Email: {{$order->email}}
    		</li>
    		<li>
    			Mô tả: {{$order->description}}
    		</li>
    		<li>
    			Ngày đặt: {{$order->created_at}}
    		</li>
	    </ul>
	    <div class="p-2">
	    	@foreach($order_details as $detail)
	    		@if($detail->price)
	    			<p>Loại website: {{$detail->price->name}}</p>
	    		@endif
	    	@endforeach
	    </div>
    </div>
@stop