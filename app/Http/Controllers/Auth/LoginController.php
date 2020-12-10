<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
    //protected $redirectTo = '/admin';
    /**
     * Create a new controller instance.
     *
     * @return void
     */


     public function redirectPath()
    {
         if(user()->has_role(config('app.admin_role'))||user()->has_role(config('app.doctor_role'))||user()->has_role(config('app.secretary_role'))) {
            return  '/admin';
        }else
        {
            return  '/profile';
        }

        
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
