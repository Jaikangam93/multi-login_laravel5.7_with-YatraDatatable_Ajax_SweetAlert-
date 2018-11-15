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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(array('middleware' => 'auth'), function()	
{ 
	//Dashboard Routes
	Route::get('systemadmin/dashboard','DashboardController@show_admindashboard')->name('admindashboard');
	Route::get('teacher/dashboard','DashboardController@show_teacherdashboard')->name('teacherdashboard');
	Route::get('student/dashboard','DashboardController@show_studentdashboard')->name('studentdashboard');

	//System User Route for Insert, Edit, delete and Change Status 
	Route::resource('systemadmin/systemusers', 'SystemAdminController');
	//Ajax route and passing the Json Data 
	Route::get('systemadmin/api/managesystemusers', 'SystemAdminController@apimanagesystemusers')->name('api.managesystemusers');
	//Route for Changing the Status of User 
	Route::post('systemadmin/userchangestatus/{id}','SystemAdminController@userchangestatus')->name('userchangestatus');
	
});
