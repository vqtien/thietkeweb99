@extends('layouts.admin_login')

@section('content') 
    <div class="login-panel">
        <h1>Đăng nhập</h1>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">
                    Đăng nhập
                </button>                
            </div>           
        </form>
    </div>
@stop