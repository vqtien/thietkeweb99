@extends('layouts.admin')


@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.blog-types.index')}}">Danh mục blog</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.blog-types.create')}}" class="btn btn-success btn-sm">Chỉnh sửa</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh mục blog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.blog-types.update', ['blog_type' => $blog_type->id])}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="blog_type-name">
                        Tên danh mục
                    </label>
                    <input type="text" required name="blog_type[name]" class="form-control" id="name" value="{{$blog_type->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="blog_type[description]" class="form-control" value="{{$blog_type->description}}" placeholder="Mô tả nhỏ">
                </div>
                          
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop