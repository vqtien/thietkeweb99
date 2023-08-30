@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Khách hàng</li>
@stop

@section('actions')
	<a href="{{route('admin.customers.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $customers->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên khách hàng</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($customers as $key => $customer)
		    	
		    	<tr id="item-{{$customer->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$customer->name}}
		    		</td>
		    		<td>
		    			@if($customer->photo)
                            <img src="{{image_path($customer->photo->photo_path)}}" class="image-mx-150">
                        @endif
		    		</td>
		    		<td>{{$customer->description}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.customers.edit', ['customer' => $customer->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.customers.destroy', ['customer' => $customer->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $customers->links() }}	
	    </div>
    </div>
@stop