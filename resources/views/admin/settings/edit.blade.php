@extends('layouts.admin')


@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.settings.index')}}">Cài đặt</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.settings.create')}}" class="btn btn-success btn-sm">Chỉnh sửa</a>
@stop

@section('content') 
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cài đặt</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.settings.update', ['setting' => $setting->id])}}" enctype="multipart/form-data" method="POST" class="formAjax">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="setting-name">
                        Tên cài đặt
                    </label>
                    <input type="text" required name="setting[name]" class="form-control" id="name" value="{{$setting->name}}">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <input type="text" name="setting[content]" class="form-control" value="{{$setting->content}}" placeholder="Nội dung">
                </div>
                          
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@stop