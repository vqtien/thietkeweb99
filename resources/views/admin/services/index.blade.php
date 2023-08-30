@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dịch vụ</li>
@stop

@section('actions')
	<a href="{{route('admin.services.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $services->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên dịch vụ</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th>Ngày tạo</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($services as $key => $service)
		    	
		    	<tr id="item-{{$service->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>	
		    		<td>
		    			{{$service->name}}
		    		</td>
		    		<td>
		    			@if($service->photo)
                            <img src="{{image_path($service->photo->photo_path)}}" class="image-small">
                        @endif
		    		</td>
		    		<td>{{$service->description}}</td>
		    		<td>{{$service->created_at}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.services.edit', ['service' => $service->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.services.destroy', ['service' => $service->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $services->links() }}	
	    </div>
    </div>
@stop