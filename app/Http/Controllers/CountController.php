<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Employee;
use App\Department;
use App\User;
use Auth;

class CountController extends Controller
{
    function initial(){
    // Refresh Database
    Artisan::call('migrate:refresh');
    
    //Create 1 Admin User
    $user = new User;
    $user->username = 'admin';
    $user->firstname = 'Carlo';
    $user->lastname = 'Barcena';
	$user->password = bcrypt('12345');
	$user->save();

    $status = ['Regular','Provisionary','Terminated'];
    $file = ['file1.txt','file2.txt','file3.txt'];
    $gender = ['Male','Female'];

    //Create 5 Departments
	$dept = new Department;
	$dept->name = 'No Department';
	$dept->description = 'Default Department';
	$dept->save();
	for($i=1;$i<5;$i++){
		$name[$i]='Department' . " " . $i;
		$description[$i]='Description'. " " . $i;
		$dept = new Department;
		$dept->name = $name[$i];
		$dept->description = $description[$i];
		$dept->save();
	}

    //Create 100 Employees
    for($i=1;$i<101;$i++){
	$emp = new Employee;
	$emp->name = 'Carlo';
	$emp->age = rand(20,60);
	$emp->gender = $gender[rand(0,1)];
	$emp->address = 'Address';
	$emp->department_id = rand(1,5);
	$emp->document = $file[rand(0,2)];
	$emp->status = $status[rand(0,2)];
	$emp->save();
	}

	// Faker Mechanics
	Artisan::call('db:seed', [
         '--class' => 'EmployeesTableSeeder'
    ]);
	
	session(['datainit' => 1]);
	return redirect('/');
	}
}
