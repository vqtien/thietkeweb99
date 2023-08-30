@extends('layouts.admin')

@section('crumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.prices.index')}}">Bảng giá</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>

@stop

@section('actions')
  <a href="{{route('admin.prices.create')}}" class="btn btn-success btn-sm">Thêm mới</a>
@stop

@section('content') 
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Bảng giá</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.prices.update', ['price' => $price->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="price-name">
                        Tên bảng giá
                    </label>
                    <input type="text" name="price[name]" class="form-control" id="price-name" value="{{$price->name}}">
                </div>
                <div class="form-group">
                    <label>Giá thiết kế</label>
                    <input type="number" name="price[price]" class="form-control" id="price" value="{{$price->price}}">
                </div>
                <div class="form-group">
                    <label>Thời gian thiết kế</label>
                    <input type="text" name="price[deadline]" class="form-control" value="{{$price->deadline}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="price[description]" class="form-control" >{{$price->description}}</textarea>
                </div>                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Lưu
                </button>
            </div>
        </form>
    </div>
    <div class="mt-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Danh sách thuộc tính</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="price-name">
                        Danh sách thuộc tính
                    </label>
                    <ul class="ul-property-list">                       
                    @foreach($properties as $property)
                        @php
                            $std = $price_details->first(function($value, $key) use($property){
                                    return $value->property_id == $property->id;
                                });
                        @endphp
                        <li>
                            <div class="icheck-primary d-inline">
                                <input data-id="{{$property->id}}" 
                                    type="checkbox" 
                                    class="property-click" 
                                    id="property-{{$property->id}}" 
                                    {{$std  ? "checked" : ""}}>
                                <label for="property-{{$property->id}}">
                                  {{$property->name}}
                                </label>
                            </div>
                            
                        </li>       
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".property-click").click(function(e){
                var property_id = $(this).data('id');
                var price_id = {{$price->id}};
                var params = {
                    price_property: {
                        property_id: property_id,
                        price_id: price_id
                    }
                };

                axios.post(`${admin_path}/price-properties`, params)
                .then((response) => {
                    showSuccessMessage("Thành công!");
                })
            })
        })
    </script>
@stop