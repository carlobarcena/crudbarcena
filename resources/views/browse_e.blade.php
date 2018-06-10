<!-- browse_e.blade.php -->
<div class="container">
<div class="row justify-content-center">
	<table id="empTable" class="table table-striped table-bordered dt-responsive nowrap back1" style="width:100%">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th data-priority="1" scope="col">Name</th>
				<th scope="col">Age</th>
				<th scope="col">Gender</th>
				<th scope="col">Address</th>
				<th scope="col">Department</th>
				<th scope="col">Document</th>
				<th scope="col">Status</th>
				<th data-priority="2" scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($emp_list as $emp)
			<tr>
				<td>{{$emp->id}}</td>
				<td>{{$emp->name}}</td>
				<td>{{$emp->age}}</td>
				<td>{{$emp->gender}}</td>
				<td>{{$emp->address}}</td>
				@if($emp->department_id == null)
				<td>{{$dept_list[0]->name}}</td>
				@else
				<td>{{$emp->department->name}}</td>
				@endif
				<td>{{$emp->document}}</td>
				<td>{{$emp->status}}</td>
				<td><a onclick='down_f("{{$emp->document}}")' data-toggle="modal" data-target="#edit_eModal" style="color:teal;"><i class="fas fa-download"></i></a>
					@if($emp->department_id == null)
					<a onclick='edit_e("{{$emp->id}}","{{$emp->name}}","{{$emp->age}}","{{$emp->gender}}","{{$emp->address}}","{{$dept_list[0]->name}}","{{$emp->document}}","{{$emp->status}}")' data-toggle="modal" data-target="#edit_eModal" style="color:green;"><i class="fas fa-pencil-alt"></i></a>
					@else
					<a onclick='edit_e("{{$emp->id}}","{{$emp->name}}","{{$emp->age}}","{{$emp->gender}}","{{$emp->address}}","{{$emp->department->name}}","{{$emp->document}}","{{$emp->status}}")' data-toggle="modal" data-target="#edit_eModal" style="color:green;"><i class="fas fa-pencil-alt"></i></a>
					@endif
					 <a onclick='delete_e("{{$emp->id}}","{{$emp->name}}")' data-toggle="modal" data-target="#edit_eModal" style="color:darkred;"><i class="fas fa-trash-alt"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>

<!-- The Modal -->
<div class="modal" id="edit_eModal">
  <div class="modal-dialog">
    <div class="modal-content" id="modal-ajax">

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
	  $('#empTable').DataTable();
});

</script>