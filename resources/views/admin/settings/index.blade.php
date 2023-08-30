@extends('layouts.admin')

@section('crumb')
	<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Cài đặt</li>
@stop

@section('actions')
	<a href="{{route('admin.settings.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
	<div class="mt-3">
	
	    <table class="table table-layout-fixed" cellpadding="0" cellspacing="0">
	    	<tr>
				<th class="w50">No</th>
				<th class="text-left">Tên cài đặt</th>
				<th>Mô tả</th>
				<th class="w150">Thao tác</th>				
			</tr>
			
		    @foreach ($settings as $key => $setting)
		    	
		    	<tr id="item-{{$setting->id}}">
		    		<td class="text-center">{{$key + 1 }}</td>			    	
		    		<td>
		    			{{$setting->name}}
		    		</td>
		    		
		    		<td>{{$setting->content}}</td>
		    		<td class="text-center">
		    			<a href="{{ route('admin.settings.edit', ['setting' => $setting->id]) }}" 
			    			class="btn btn-success btn-sm mt-1 mb-1" data-turbolinks="false">Sửa</a>
			    		<a href="{{ route('admin.settings.destroy', ['setting' => $setting->id]) }}" 
			    			class="btn btn-danger destroy-item-resource btn-sm mt-1 mb-1">Xóa</a>
		    		</td>		
		    	</tr>		
		    @endforeach
	    </table>
	
    </div>
@stop