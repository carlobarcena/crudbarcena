<!-- delete_dModal.blade.php -->

<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title">Are you sure?</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<form method="POST" action="deleted_d">
	@csrf
	<div class="modal-body">
	You are about to delete {{$name}}.
	<input type="text" name="del_did" value="{{$id}}" hidden>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
	<button type="submit" class="btn btn-danger">Delete</button>
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	</div>
</form>