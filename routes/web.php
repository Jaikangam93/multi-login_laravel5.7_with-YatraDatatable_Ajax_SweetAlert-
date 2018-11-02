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
	Route::get('admin/dashboard','DashboardController@show_admindashboard')->name('admindashboard');
	Route::get('teacher/dashboard','DashboardController@show_teacherdashboard')->name('teacherdashboard');
	Route::get('student/dashboard','DashboardController@show_studentdashboard')->name('studentdashboard');

	



	//System User Route 
	Route::resource('admin/systemusers', 'SystemAdminController');

	Route::get('admin/api/managesystemusers', 'SystemAdminController@apimanagesystemusers')->name('api.managesystemusers');

	
});
