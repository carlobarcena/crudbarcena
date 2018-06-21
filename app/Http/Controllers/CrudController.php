<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use Auth;
use Session;


class CrudController extends Controller
{
    function scEmployee(){
       if (Auth::guest()) {
            return redirect('login');
        }
        $dept_list = Department::all();
        return view('create_employee',compact('dept_list')); 
    }
    function createEmployee(Request $request){
        
        if (Auth::guest()) {
            return redirect('login');
        }
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;
        $department = $request->department;
        $document = $request->document->getClientOriginalName();
        $request->document->storeAs('files',$request->document->getClientOriginalName());
        $status = $request->status;

        $emp = new Employee;
        $emp->name = $name;
        $emp->age = $age;
        $emp->gender = $gender;
        $emp->address = $address;
        $emp->department_id = $department;
        $emp->document = $document;
        $emp->status = $status;
        $emp->save();

        // session(['create_e' => 1]);
        Session::flash('success','Employee was created!');
        return redirect('employee');
    }

    function editEmployee(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->id;
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;
        $department = $request->department;
        $document = $request->document;
        $status = $request->status;
        $dept_list = Department::all();

        return view('edit_eModal',compact('id','name','age','gender','address','department','document','status','dept_list'));
    }

    function editedEmployee(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->e_id;
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;
        $department = $request->department;
        $status = $request->status;
        if ($request->document == null){
        }
        else{
           $document = $request->document->getClientOriginalName();
            $request->document->storeAs('files',$request->document->getClientOriginalName()); 
        }
        
        
        $emp = Employee::find($id);
        $emp->name = $name;
        $emp->age = $age;
        $emp->gender = $gender;
        $emp->address = $address;
        $emp->department_id = $department;
        if ($request->document == null){
        }
        else{
          $emp->document = $document;  
        }
        
        $emp->status = $status;
        $emp->save();

        // session(['edit_e' => 1]);
        Session::flash('success','Employee#'. $id .' was updated!');
        return redirect('employee');
    }

    function deleteEmployee(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->id;
        $name = $request->name;

        return view('delete_eModal',compact('id','name'));
    }

    function deletedEmployee(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->del_eid;
        $emp = Employee::find($id);
        $emp->delete();

        // session(['edit_e' => 1]);
        Session::flash('success','Employee#'. $id .' was deleted!');
        return redirect('employee');
    }

    function showEmployee(){
        if (Auth::guest()) {
            return redirect('login');
        }
        $emp_list = Employee::all();
        $dept_list = Department::all();
        return view('browse_e',compact('emp_list','dept_list'));
    }


    function createDepartment(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $name = $request->name;
        $description = $request->description;

        $dept = new Department;
        $dept->name = $name;
        $dept->description = $description;
        $dept->save();

        // session(['create_d' => 1]);
        Session::flash('success','Department was created!');
        return redirect('department');
    }

    function editDepartment(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        return view('edit_dModal',compact('id','name','description'));
    }

    function editedDepartment(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->d_id;
        $name = $request->name;
        $description = $request->description;
        
        $dept = Department::find($id);
        $dept->name = $name;
        $dept->description = $description;
        $dept->save();

        // session(['edit_d' => 1]);
        Session::flash('success','Department#'. $id .' was updated!');
        return redirect('department');
    }

    function deleteDepartment(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->id;
        $name = $request->name;

        return view('delete_dModal',compact('id','name'));
    }

    function deletedDepartment(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $id = $request->del_did;
        $emp = Department::find($id);
        $emp->delete();

        // session(['edit_d' => 1]);
        Session::flash('success','Department#'. $id .' was deleted!');
        return redirect('department');
    }

    function showDepartment(){
        if (Auth::guest()) {
            return redirect('login');
        }
        
        $dept_list = Department::all();
        return view('browse_d',compact('dept_list'));
    }

    function downFile(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $file = $request->down;
        return view('down_Modal',compact('file'));
    }

    function downloadFile(Request $request){
        if (Auth::guest()) {
            return redirect('login');
        }
        $file = $request->dl_name;
        return response()->download(storage_path('app/public/files/' . $file));
    }
}
