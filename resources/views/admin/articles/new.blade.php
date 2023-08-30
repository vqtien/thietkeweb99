@extends('layouts.admin')

@section('javascript')
    <script src="{{ asset('js/admin/summernote-bs4.min.js')}}"></script>
@stop
@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.articles.index')}}">Tin tức</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.articles.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tin tức</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.articles.store')}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="article-name">
                        Tên article
                    </label>
                    <input type="text" required name="article[name]" class="form-control" id="article-name" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="article[description]" class="form-control" id="description" placeholder="Mô tả nhỏ">
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input type="text" name="article[tags]" class="form-control" id="tags" placeholder="Tags">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="article[article_type_id]" required id="article_type_id">
                        <option value="">--Chọn--</option>
                        @foreach($article_types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
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
                    <textarea name="article[content]" class="form-control summernote"></textarea>
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