<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Admin login</title>
      
      <link href="{{ asset("/css/admin.css")}}" rel="stylesheet">      
  </head>
  <body>    
    <div class="container-fluid">
      <div class="mt-2"> 
        <div style="width: 350px;margin: 0 auto">       
          @include('layouts/flash')
        </div>
        @yield('content')
      </div>
    </div>    
  </body>
</html>