@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.properties.index')}}">Thuộc tính website</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

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
        <form action="{{route('admin.properties.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="property-name">
                        Tên thuộc tính
                    </label>
                    <input type="text" name="property[name]" class="form-control" id="property-name" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="property[description]" class="form-control" id="property">
                </div>                      
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop