@extends('layouts.admin')


@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.website-types.index')}}">Danh mục website</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.website-types.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh mục website</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.website-types.store')}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="website_type-name">
                        Tên danh mục
                    </label>
                    <input type="text" required name="website_type[name]" class="form-control" id="name" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label for="website_type-name">
                        Class icon
                    </label>
                    <input type="text" name="website_type[class_icon]" class="form-control" id="class_icon">
                </div>
                <div class="form-group">
                    <label for="website_type-name">
                        Vị trí
                    </label>
                    <input type="number" name="website_type[sorted]" class="form-control" id="sorted">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="website_type[description]" class="form-control" id="description" placeholder="Mô tả nhỏ">
                </div>
                          
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop