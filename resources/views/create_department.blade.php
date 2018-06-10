<!-- create_department.blade.php -->
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<div class="card-header">Create Department</div>
            	<div class="card-body">
            		<form method="POST" action="create_d">
                        @csrf
                        <div class="form-group row">
                        	<label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                        	<div class="col-md-6">
                        		<input id="name" type="text" class="form-control" name="name" required autofocus>
                        	</div>
                        </div>

                        <div class="form-group row">
                        	<label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>

                        	<div class="col-md-6">
                        		<textarea id="description" type="text" class="form-control" name="description" required autofocus></textarea>
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