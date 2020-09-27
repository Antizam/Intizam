<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{id}', 'UserController@profile')->name('user.profile');

// Password route show form
Route::get('/password/user/', 'UserController@passwordEdit')->name('user.password');
// Password Post to change
Route::post('/password/user/', 'UserController@changePassword')->name('changePassword');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');

Route::post('/edit/user/', 'UserController@update')->name('user.update');

/*
Route::resource('students', 'StudentsController');
call as students.show
url as
'/students/{student}'
*/

Route::get('{id}/students', 'StudentsController@index')->name('student.index');

Route::get('students/create/', 'StudentsController@create')->name('student.create');

Route::post('{id}/students/store/', 'StudentsController@store')->name('student.store');


Route::get('students/{std_id}', 'StudentsController@show')->name('student.show');

Route::get('students/{std_id}/edit', 'StudentsController@edit')->name('student.edit');

Route::post('students/{std_id}', 'StudentsController@update')->name('student.update');

Route::DELETE('students/{std_id}', 'StudentsController@destroy')->name('student.destroy');