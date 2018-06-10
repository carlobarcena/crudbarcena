<!-- department.blade.php -->
@extends('layouts.app')

@section('content')
<div class="center">
	<h1>Department Module</h1>

	<button class="btn btn-info" id="browse_department">Browse</button>
	<button class="btn btn-success" id="create_department">Create Department</button>
	<hr>

	<span id="content"></span>
</div>
@endsection