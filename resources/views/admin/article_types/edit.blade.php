@extends('layouts.admin')


@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.article-types.index')}}">Danh mục tin tức</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.article-types.create')}}" class="btn btn-success btn-sm">Chỉnh sửa</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh mục tin tức</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.article-types.update', ['article_type' => $article_type->id])}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="article_type-name">
                        Tên danh mục
                    </label>
                    <input type="text" required name="article_type[name]" class="form-control" id="name" value="{{$article_type->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="article_type[description]" class="form-control" value="{{$article_type->description}}" placeholder="Mô tả nhỏ">
                </div>
                          
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop