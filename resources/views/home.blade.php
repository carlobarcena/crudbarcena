@extends('layouts.app')

@section('content')
<div class="container center">
<h1>Dashboard</h1>
<h4>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}} ({{Auth::user()->username}})!</h4>

</div>

<hr>
<div class="container center">
	<h2>Employee Count (Status)</h2>
	<div class="row">
	
		<div class="col-md-6 offset-md-2">
			<div class="chart-container">
				<canvas id="chart" class="back1"></canvas>
			</div>
		</div>

	</div>

	<br><br>
	<h2>Employee Count per Dept.</h2>
	<div class="row">
		
	<div class="col-md-8 offset-md-2">
			<table id="dashTable" class="table table-striped table-bordered dt-responsive nowrap back1" style="width:100%">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th data-priority="1" scope="col">Name</th>
						<th scope="col">Employee Count</th>
					</tr>
				</thead>
				<tbody>
					@for($i = 0; $i < sizeof($dept_list);$i++)
					<tr>
						<td>{{$dept_list[$i]->id}}</td>
						<td>{{$dept_list[$i]->name}}</td>
						<td>{{$ed_count[$i]}}</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
</div>





@endsection