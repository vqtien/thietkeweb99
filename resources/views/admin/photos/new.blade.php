@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.photos.index')}}">Hình ảnh</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Hình ảnh</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.photos.store')}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <div class="card-body"> 
                <div class="form-group">
                    <div>
                        <label for="exampleInputFile">Hình ảnh</label>                   
                        <input type="file" class="upload-file" id="exampleInputFile" name="image" accept="image/*">
                    </div>
                    
                </div> 
                              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>

    <script>

    </script>
@stop
