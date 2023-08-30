@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.web-functions.index')}}">Chức năng website</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.web-functions.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Chức năng website</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.web-functions.update', ['web_function' => $web_function->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="web_function-name">
                        Tên chức năng
                    </label>
                    <input type="text" name="web_function[name]" class="form-control" id="web-function-name" value="{{$web_function->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="web_function[description]" class="form-control" value="{{$web_function->description}}">
                </div>   
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" name="web_function[price]" class="form-control" value="{{$web_function->price}}" id="price">
                </div>                     
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop