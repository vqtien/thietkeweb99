@extends('layouts.admin')

@section('javascript')
    <script src="{{ asset('js/admin/summernote-bs4.min.js')}}"></script>
@stop

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.technologies.index')}}">Công nghệ</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.technologies.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Công nghệ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.technologies.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="technology-name">
                        Tên công nghệ
                    </label>
                    <input type="text" name="technology[name]" class="form-control" id="technology-name" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="technology[description]" class="form-control" id="description" placeholder="Mô tả nhỏ">
                </div>
                <div class="form-group">
                    <label>Class icon</label>
                    <input type="text" name="technology[class_icon]" class="form-control" id="class_icon">
                </div>
                <div class="form-group">
                    <label>Sắp xếp</label>
                    <input type="number" name="technology[sorted]" class="form-control" id="sorted">
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputFile">Hình ảnh</label>                   
                        <input type="file" class="upload-file" id="exampleInputFile" name="image" accept="image/*">
                    </div>
                    <div class="mt-2">
                        <img style="max-width:800px" src="/images/no-image.png" class="preview">
                    </div>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="technology[content]" class="form-control summernote"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
    <script>
        $(function () {
            // Summernote
            $('.summernote').summernote('removeFormat');
        })
    </script>
@stop