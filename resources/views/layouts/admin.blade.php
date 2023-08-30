<!DOCTYPE html>
<html lang="{{Lang::locale()}}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quản trị</title>
        <link rel="shortcut icon" href="/favicon.ico" />  
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">  
        <meta name='csrf-token' content={{csrf_token()}}> 
        <script>
            let admin_path = '{{route('admin.root')}}';
        </script>
        <script src="{{ asset("js/jquery-3.6.0.min.js")}}"></script>
        <script src="{{ asset("/js/admin/bootstrap.bundle.min.js")}}"></script>
        @yield('javascript')
        <link href="{{ mix("css/admin.css")}}" rel="stylesheet" data-turbolinks-track="reload"> 
         <script src="{{ mix("js/admin.js")}}" data-turbolinks-track="reload"></script> 

    </head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">    
        <!-- Navbar -->
        @include('layouts/admin/header')
        <!-- /.navbar -->
        
        <!-- Sidebar -->
        @include('layouts/admin/left')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">                  
                  <div class="col-sm-6">
                    <ol class="breadcrumb ">
                      @yield('crumb')
                    </ol>
                  </div>
                  <div class="col-sm-6">
                    <div class="float-sm-right">
                      @yield('actions')                        
                    </div>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    <div class="notification"></div>
</body>
</html>