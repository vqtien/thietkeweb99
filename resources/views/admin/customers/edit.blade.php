@extends('layouts.admin')


@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.customers.index')}}">Khách hàng</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.customers.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Khách hàng</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.customers.update', ['customer' => $customer->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="customer-name">
                        Tên khách hàng
                    </label>
                    <input type="text" name="customer[name]" class="form-control" id="customer-name" value="{{$customer->name}}" placeholder="Nhập tên khách hàng">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="customer[description]" class="form-control" id="description" value="{{$customer->description}}" placeholder="Mô tả nhỏ">
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputFile">Hình ảnh</label>                   
                        <input type="file" class="upload-file" id="exampleInputFile" name="image" accept="image/*">
                    </div>
                    <div class="mt-2">
                        @if($customer->photo)
                            <img style="max-width:800px" src="{{image_path($customer->photo->photo_path)}}" class="preview">
                        @else
                            <img style="max-width:800px" src="/images/no-image.png" class="preview">
                        @endif
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