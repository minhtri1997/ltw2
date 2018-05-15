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
Route::get('/',function(){
	return 'Hello world';
});

Route::get('read', [
	'as' => 'abc',
	'uses' => 'StudentController@index'
]);
Route::get('sample', [
	'as' => 'sample',
	'uses' => 'MenuController@index'
	
]);

Route::get('create', [
	'as' => 'student',
	'uses' => 'StudentController@createStudent'
]);

Route::get('delete/{id}','StudentController@deleteStudent');

Route::get('update/{id}/edit','StudentController@getStudentByID'
);

Route::post('update','StudentController@updateStudent');

Route::get('forminsert',function ()
{
	return view('student.insertView');
});

Route::post('insertstudent','StudentController@insertStudent');