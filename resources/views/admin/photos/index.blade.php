@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Hình ảnh</li>
@stop

@section('actions')
	<a href="{{route('admin.photos.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
		
		<div class="paginate-container">
	    	{{ $photos->links() }}	
	    </div>
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Hình</th>  
				<th>Tên hình</th>
				<th>Ngày tạo</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($photos as $key => $photo)
		    	
		    	<tr id="item-{{$photo->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>
		    		<td>
                        <img src="{{image_path($photo->photo_path)}}" class="image-small">
		    		</td>
		    		<td>
		    			{{$photo->name}}
		    		</td>
		    		<td>{{$photo->created_at}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.photos.edit', ['photo' => $photo->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.photos.destroy', ['photo' => $photo->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	    <div class="paginate-container">
	    	{{ $photos->links() }}	
	    </div>
    </div>
@stop