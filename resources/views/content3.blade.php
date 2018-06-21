@extends('design.blueprint')
@section('content')
<div class="content">
    <div class="center">
        <!-- <h2>Department Module</h2> -->
        <button class="btn btn-info btn-fill" id="browse_department">Browse</button>
        <button class="btn btn-success btn-fill" id="create_department">Create Department</button>
    </div>
    
    <hr>
    @if(Session::has('success'))
    	<div class="alert alert-info" role="alert">
		  {{Session::get('success')}}
		</div>
    @endif
    <span id="content"></span>
</div>
@endsection

        

