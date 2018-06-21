@extends('design.blueprint')
@section('content')
<div class="content">
    <div class="center">
        <!-- <h2>Employee Module</h2> -->
        <button class="btn btn-info btn-fill" id="browse_employee">Browse</button>
        <button class="btn btn-success btn-fill" id="create_employee">Create Employee</button>
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

        

