<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/home';

    public function redirectTo()
    {

        $role = \Auth::user()->role;
        
        if ($role == 'SYA') {         

            return('admin/dashboard');

        } 
        elseif ($role == 'THR')
         {
            //$this->redirectTo = 'managementdashboard'; //check on route Web
            return('teacher/dashboard');
        }

        elseif ($role == 'STD')
         {
            //$this->redirectTo = 'customercareexecutive';
            return('student/dashboard');
        }


    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
