@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.prices.index')}}">Bảng giá</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>

@stop

@section('actions')
  <a href="{{route('admin.prices.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Bảng giá</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.prices.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="price-name">
                        Tên bảng giá
                    </label>
                    <input type="text" name="price[name]" class="form-control" id="price-name" placeholder="Nhập tên">
                </div>
                <div class="form-group">
                    <label>Giá thiết kế</label>
                    <input type="number" name="price[price]" class="form-control" id="price">
                </div>
                <div class="form-group">
                    <label>Thời gian thiết kế</label>
                    <input type="text" name="price[deadline]" class="form-control" id="deadline">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="price[description]" class="form-control" id="description">
                </div>                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop