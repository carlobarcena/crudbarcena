<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('employee', function () {
	if (Auth::guest()) {
	 return redirect('login');
	}
	session(['link1' => 1]);
    return view('employee');
});

Route::get('department', function () {
	if (Auth::guest()) {
	 return redirect('login');
	}
	session(['link2' => 1]);
    return view('department');
});

Route::get('/create_employee','CrudController@scEmployee');

Route::get('create_department', function () {
	if (Auth::guest()) {
	 return redirect('login');
	}
    return view('create_department');
});

Route::get('/browse_e','CrudController@showEmployee');
Route::post('/create_e','CrudController@createEmployee');
Route::post('/edit_eModal','CrudController@editEmployee');
Route::post('/edited_e','CrudController@editedEmployee');
Route::post('/delete_eModal','CrudController@deleteEmployee');
Route::post('/deleted_e','CrudController@deletedEmployee');

Route::get('/browse_d','CrudController@showDepartment');
Route::post('/create_d','CrudController@createDepartment');
Route::post('/edit_dModal','CrudController@editDepartment');
Route::post('/edited_d','CrudController@editedDepartment');
Route::post('/delete_dModal','CrudController@deleteDepartment');
Route::post('/deleted_d','CrudController@deletedDepartment');

Route::post('/down_f','CrudController@downFile');
Route::post('/dl_f','CrudController@downloadFile');

Route::get('/initialize','CountController@initial');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
