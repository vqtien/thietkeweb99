@extends('layouts.admin')

@section('javascript')
    <script src="{{ asset('js/admin/summernote-bs4.min.js')}}"></script>
@stop

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.services.index')}}">Dịch vụ</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.services.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dịch vụ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.services.store')}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="service-name">
                        Tên dịch vụ
                    </label>
                    <input type="text" name="service[name]" class="form-control" id="service-name" placeholder="Nhập tên dịch vụ">
                </div>
                <div class="form-group">
                    <label for="service-title">
                        Tiêu đề
                    </label>
                    <input type="text" name="service[title]" class="form-control" id="service-title" placeholder="Nhập tiêu đề">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="service[description]" class="form-control" id="description" placeholder="Mô tả nhỏ">
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
                    <textarea name="service[content]" class="form-control summernote"></textarea>
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