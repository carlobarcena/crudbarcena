<!-- create_employee.blade.php -->
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<div class="card-header">Create Employee</div>
            	<div class="card-body">
            		<form method="POST" action="create_e" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                        	<label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                        	<div class="col-md-6">
                        		<input id="name" type="text" class="form-control" name="name" required autofocus>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="age" class="col-sm-4 col-form-label text-md-right">Age</label>

                        	<div class="col-md-6">
                        		<input id="age" type="number" class="form-control" name="age" required autofocus>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="gender" class="col-sm-4 col-form-label text-md-right">Gender</label>

                        	<div class="col-md-6">
                        		<select name="gender" id="gender" class="form-control">
                        			<option value="Male">Male</option>
                                    <option value="Female">Female</option>
                        		</select>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="address" class="col-sm-4 col-form-label text-md-right">Address</label>

                        	<div class="col-md-6">
                        		<input id="address" type="text" class="form-control" name="address" required autofocus>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="department" class="col-sm-4 col-form-label text-md-right">Department</label>

                        	<div class="col-md-6">
                        		<select name="department" id="department" class="form-control">
                                    @foreach($dept_list as $dept)
                        			<option value="{{$dept->id}}">{{$dept->name}}</option>
                                    @endforeach
                        		</select>
                        	</div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="document" class="col-sm-4 col-form-label text-md-right">Document</label>

                            <div class="col-md-6">
                                <input id="document" type="file" class="form-control" name="document" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                        	<label for="status" class="col-sm-4 col-form-label text-md-right">Status</label>

                        	<div class="col-md-6">
                        		<select name="status" id="status" class="form-control">
                        			<option value="Regular">Regular</option>
                                    <option value="Provisionary">Provisionary</option>
                                    <option value="Terminated">Terminated</option>
                        		</select>
                        	</div>
                        </div>

                        <div class="form-group row mb-0 mr-auto">
                            <div class="col-md-8 offset-md-1">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>


                    </form>
            	</div>
            </div>
        </div>
    </div>
</div>