@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.websites.index')}}">Website</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.websites.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Website</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.websites.store')}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="website-name">
                        Tên website
                    </label>
                    <input type="text" required name="website[name]" class="form-control" id="website-name" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" name="website[code]" class="form-control" id="code" placeholder="Mã website">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="website[description]" class="form-control" id="description" placeholder="Mô tả nhỏ">
                </div>

                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="website[website_type_id]" required id="website_type_id">
                        <option value="">--Chọn--</option>
                        @foreach($website_types as $type)
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
                             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop