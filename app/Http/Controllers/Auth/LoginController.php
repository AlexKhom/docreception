<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your site-layouts screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
/*
    protected function authenticated(Request $request, $user)
    {
        if ( $user->hasRole('admin') ||  $user->hasRole('SuperAdmin') ) {// do your margic here
            return redirect()->route('dashboard');
        }

        return redirect('/reception/index');
    }
*/
/*
    public function redirectTo() {
        $user = Auth::user();
        switch(true) {
            case $user->isDoctor():
                return '/reception/doctor';
            case $user->isAdmin():
            case $user->isSuperAdmin():
                return '/admin/dashboard';
            default:
                return '/reception/index';
        }
    }
*/
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

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
