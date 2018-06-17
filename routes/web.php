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


Route::get('/','ContentController@content1');
Route::get('/dashboard','ContentController@content1');
Route::get('/employee','ContentController@content2');
Route::get('/department','ContentController@content3');
Route::get('/content4','ContentController@content4');
Route::get('/content5','ContentController@content5');

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


Route::get('/initialize','MagicController@initial');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
