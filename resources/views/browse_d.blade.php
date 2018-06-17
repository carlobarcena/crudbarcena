<!-- browse_d.blade.php -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Department List</h4>
				</div>
				<div class="content">
					<table id="deptTable" class="table table-striped table-bordered dt-responsive nowrap back1" style="width:100%">
						<thead>
							<tr>
								<th scope="col">Id</th>
								<th data-priority="1" scope="col">Name</th>
								<th scope="col">Description</th>
								<th data-priority="2" scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dept_list as $dept)
							<tr>
								<td>{{$dept->id}}</td>
								<td>{{$dept->name}}</td>
								<td>{{$dept->description}}</td>
								<td style="text-align: center;"><a onclick='edit_d("{{$dept->id}}","{{$dept->name}}","{{$dept->description}}")' data-toggle="modal" data-target="#edit_eModal" style="color:green;"><i class="fas fa-pencil-alt"></i></a> 
									@if($dept->id == 1)
									@else
									<a onclick='delete_d("{{$dept->id}}","{{$dept->name}}")' data-toggle="modal" data-target="#edit_eModal" style="color:darkred;"><i class="fas fa-trash-alt"></i></a></td>
									@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	

<script>
$(document).ready(function(){
	  $('#deptTable').DataTable();
});

</script>