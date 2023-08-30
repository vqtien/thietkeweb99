@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.properties.index')}}">Thuộc tính website</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.properties.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thuộc tính website</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.properties.update', ['property' => $property->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="property-name">
                        Tên thuộc tính
                    </label>
                    <input type="text" name="property[name]" class="form-control" id="property-name" value="{{$property->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="property[description]" class="form-control" value="{{$property->description}}">
                </div>                      
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop