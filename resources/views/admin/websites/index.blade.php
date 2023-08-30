@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Website</li>
@stop

@section('actions')
	<a href="{{route('admin.websites.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $websites->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên website</th>  
				<th>Hình ảnh</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($websites as $key => $website)
		    	
		    	<tr id="item-{{$website->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$website->name}}
		    		</td>
		    		<td>
		    			@if($website->photo)
                            <img src="{{image_path($website->photo->photo_path)}}" class="image-small">
                        @endif
		    		</td>
		    		<td>{{$website->description}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.websites.edit', ['website' => $website->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.websites.destroy', ['website' => $website->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $websites->links() }}	
	    </div>
    </div>
@stop