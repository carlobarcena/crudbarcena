<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use Auth;

class ContentController extends Controller
{
    function login(){
        return view('login_design');
    }

    function register(){
        return view('register_design');
    }
    function content1(){
        if (Auth::guest()) {
            return redirect('login');
        }
    	$content = 1;
    	$content_name = 'Dashboard';

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
        $total = $regular + $provisionary + $terminated;
    	return view('content1',compact('content','content_name','regular','provisionary','terminated','dept_list','ed_count','total'));
    }

    function content2(){
        if (Auth::guest()) {
            return redirect('login');
        }
    	$content = 2;
    	$content_name = 'Employee';
        session(['link1' => 1]);
    	return view('content2',compact('content','content_name'));
    }

    function content3(){
        if (Auth::guest()) {
            return redirect('login');
        }
    	$content = 3;
    	$content_name = 'Department';
        session(['link2' => 1]);
    	return view('content3',compact('content','content_name'));
    }

function content4(){
        if (Auth::guest()) {
            return redirect('login');
        }
    	$content = 4;
    	$content_name = 'Content 4';
    	return view('content4',compact('content','content_name'));
    }

    function content5(){
        if (Auth::guest()) {
            return redirect('login');
        }
    	$content = 5;
    	$content_name = 'Content 5';
    	return view('content5',compact('content','content_name'));
    }
}
