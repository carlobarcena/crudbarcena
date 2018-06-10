<!-- employee.blade.php -->
@extends('layouts.app')

@section('content')

<div class="center">
	<h1>Employee Module</h1>

	<button class="btn btn-info" id="browse_employee">Browse</button>
	<button class="btn btn-success" id="create_employee">Create Employee</button>
	<hr>

	<span id="content"></span>
</div>

@endsection
