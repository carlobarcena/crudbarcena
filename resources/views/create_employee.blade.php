<!-- create_employee.blade.php -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Register Employee</h4>
                    </div>
                    <div class="content">
                        <form method="POST" action="create_e" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input id="age" type="number" class="form-control" name="age" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input id="address" type="text" class="form-control" name="address" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Department</label>
                                        <select name="department" id="department" class="form-control">
                                        @foreach($dept_list as $dept)
                                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Document</label>
                                    <input id="document" type="file" class="form-control" name="document" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                        <option value="Regular">Regular</option>
                                        <option value="Provisionary">Provisionary</option>
                                        <option value="Terminated">Terminated</option>
                                        </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Register Employee</button>
                            </div>    
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 