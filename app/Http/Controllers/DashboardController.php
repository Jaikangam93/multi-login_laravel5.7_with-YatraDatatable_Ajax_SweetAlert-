<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //1  Admin 
    public function show_admindashboard()
    {
    	return view('systemadmin.dashboard');    	
    }

    //2 Teacher
    public function show_teacherdashboard()
    {
    	return view('teacher.dashboard');    	
    }

    //3 Student 
    public function show_studentdashboard()
    {
    	return view('student.dashboard');    	
    }
}
