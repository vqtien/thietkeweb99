@extends('layouts.admin')

@section('javascript')
    <script src="{{ asset('js/admin/summernote-bs4.min.js')}}"></script>
@stop
@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.articles.index')}}">Tin tức</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

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
        <form action="{{route('admin.articles.update', ['article' => $article->id])}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="article-name">
                        Tên article
                    </label>
                    <input type="text" required name="article[name]" class="form-control" id="article-name" value="{{$article->name}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="article[description]" class="form-control" id="description" value="{{$article->description}}">
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input type="text" name="article[tags]" class="form-control" id="tags" value="{{$article->tags}}">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="article[article_type_id]" required id="article_type_id">
                        <option value="">--Chọn--</option>
                        @foreach($article_types as $type)
                            <option value="{{$type->id}}" {{$type->id == $article->article_type_id ? "selected" : ""}}>{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputFile">Hình ảnh</label>                   
                        <input type="file" class="upload-file" id="exampleInputFile" name="image" accept="image/*">
                    </div>
                    <div class="mt-2">
                        @if($article->photo)
                            <img style="max-width:800px" src="{{image_path($article->photo->photo_path)}}" class="preview">
                        @else
                            <img style="max-width:800px" src="/images/no-image.png" class="preview">
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="article[content]" class="form-control summernote">{{$article->content}}</textarea>
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