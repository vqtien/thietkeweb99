@extends('layouts.admin')

@section('javascript')
    <script src="{{ asset('js/admin/summernote-bs4.min.js')}}"></script>
@stop
@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.blogs.index')}}">Blog</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.blogs.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Blog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.blogs.update', ['blog' => $blog->id])}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="blog-name">
                        Tên blog
                    </label>
                    <input type="text" required name="blog[name]" class="form-control" id="blog-name" value="{{$blog->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="blog[description]" class="form-control" id="description" value="{{$blog->description}}">
                </div>

                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="blog[blog_type_id]" required id="blog_type_id">
                        <option value="">--Chọn--</option>
                        @foreach($blog_types as $type)
                            <option value="{{$type->id}}" {{$type->id == $blog->blog_type_id ? "selected" : ""}}>{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputFile">Hình ảnh</label>                   
                        <input type="file" class="upload-file" id="exampleInputFile" name="image" accept="image/*">
                    </div>
                    <div class="mt-2">
                        @if($blog->photo)
                            <img style="max-width:800px" src="{{image_path($blog->photo->photo_path)}}" class="preview">
                        @else
                            <img style="max-width:800px" src="/images/no-image.png" class="preview">
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="blog[content]" class="form-control summernote">{{$blog->content}}</textarea>
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