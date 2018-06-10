<!-- down_Modal.blade.php -->
<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title">Download File</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<form method="POST" action="dl_f">
	@csrf
	<div class="modal-body">
	Press Download to get {{$file}}. <br>
	Press Close to exit.
	<input type="text" name="dl_name" value="{{$file}}" hidden>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
	<button type="submit" class="btn btn-info">Download</button>
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	</div>
</form>