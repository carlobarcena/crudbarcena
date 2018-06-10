<!-- edit_dModal.blade.php -->
<!-- Modal Header -->
<div class="modal-header">
        <h4 class="modal-title">Edit Department Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<form method="POST" action="edited_d">
@csrf
	<div class="modal-body">
		<input class="form-control" id="d_id" type="text" name="d_id" value="{{$id}}" hidden required>

		<div class="row form-group">
        <label for="name" class="col-form-label col-md-3">Name: </label>
          <div class="col-md-6">
            <input class="form-control" id="name" type="text" name="name" value="{{$name}}" required>
          </div>
      </div>

      <div class="row form-group">
        <label for="description" class="col-form-label col-md-3">Description: </label>
          <div class="col-md-6">
            <textarea class="form-control" id="description" type="text" name="description" required>{{$description}}</textarea>
          </div>
      </div>
	
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Edit</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</form>