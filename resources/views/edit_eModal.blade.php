<!-- edit_eModal.blade.php -->

<!-- Modal Header -->
<div class="modal-header">
  <h4 class="modal-title">Edit Employee Details</h4>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<form method="POST" action="edited_e" enctype="multipart/form-data">
@csrf
  <div class="modal-body">
      <input class="form-control" id="e_id" type="text" name="e_id" value="{{$id}}" hidden required>

      <div class="row form-group">
        <label for="name" class="col-form-label col-md-3">Name: </label>
          <div class="col-md-6">
            <input class="form-control" id="name" type="text" name="name" value="{{$name}}" required>
          </div>
      </div>

      <div class="row form-group">
        <label for="age" class="col-form-label col-md-3">Age: </label>
          <div class="col-md-6">
            <input class="form-control" id="age" type="number" name="age" value="{{$age}}" required>
          </div>
      </div>

      <div class="row form-group">
        <label for="gender" class="col-form-label col-md-3">Gender: </label>
          <div class="col-md-6">
            <select name="gender" id="gender" class="form-control">
              <option value="Male" 
                    @if($gender == "Male")
                    selected 
                    @else
                    @endif
                    >Male</option>
              <option value="Female"
                    @if($gender == "Female")
                    selected 
                    @else
                    @endif
                    >Female</option>
            </select>
          </div>
      </div>

      <div class="row form-group">
        <label for="address" class="col-form-label col-md-3">Address: </label>
          <div class="col-md-6">
            <input class="form-control" id="address" type="text" name="address" value="{{$address}}" required>
          </div>
      </div>

      <div class="row form-group">
        <label for="department" class="col-form-label col-md-3">Department: </label>
          <div class="col-md-6">
            <select name="department" id="department" class="form-control">
              @foreach($dept_list as $dept)
                @if($department == $dept->name)
                <option value="{{$dept->id}}" selected>{{$dept->name}}</option>
                @else
                <option value="{{$dept->id}}">{{$dept->name}}</option>
                @endif
              @endforeach
            </select>
          </div>
      </div>

      <div class="row form-group">
        <label for="document" class="col-form-label col-md-3">Document: {{$document}} </label>
          <div class="col-md-6">
            <input class="form-control" id="document" type="file" name="document" value="">
          </div>        
      </div>

      <div class="row form-group">
        <label for="status" class="col-form-label col-md-3">Status: </label>
          <div class="col-md-6">
            <select name="status" id="status" class="form-control">
              <option value="Regular" 
                    @if($status == "Regular")
                    selected 
                    @else
                    @endif
                    >Regular</option>
              <option value="Provisionary"
                    @if($status == "Provisionary")
                    selected 
                    @else
                    @endif
                    >Provisionary</option>
              <option value="Terminated"
                    @if($status == "Terminated")
                    selected 
                    @else
                    @endif
                    >Terminated</option>
            </select>
          </div>
      </div>
      
    
    
  </div>

<!-- Modal footer -->
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
</form>