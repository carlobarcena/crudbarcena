<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['home1' => 1]);
        $regular = Employee::where('status','regular')->count();
        $provisionary = Employee::where('status','provisionary')->count();
        $terminated = Employee::where('status','terminated')->count();
        $dept_list = Department::all();
        $dept_count = Department::all()->count();
        $emp_list = Employee::all();      

        for($i=0;$i<$dept_count;$i++){
            $dept_id[$i] = $dept_list[$i]->id;
        }
        for($i=0;$i<sizeof($dept_id);$i++){
            $ed_count[$i] = Employee::where('department_id',$dept_id[$i])->count();
        }
        $ed_count[0] += Employee::where('department_id', null)->count();
        return view('home',compact('regular','provisionary','terminated','dept_list','ed_count'));
    }
}
