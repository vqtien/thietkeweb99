@if ($message = Session::get('success'))
<div class="alert alert-success bg-success alert-block">
    {{ $message }}
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger bg-danger alert-block">   
    {{ $message }}
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning bg-warning alert-block"> 
    {{ $message }}
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">  
    {{ $message }}
</div>
@endif
  
@if ($errors->any())
<div class="alert alert-danger bg-danger alert-block">  
	<ul>
    @foreach($errors->messages() as $key => $error)
    	<li>
	    	@foreach($error as $erText)
	    		{{$erText}}
	    	@endforeach
	    </li>
    @endforeach
    </ul>
</div>
@endif
