<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    //protected $redirectTo = '/';

    protected function authenticated()
    {

        if ( Auth::user()->userType == 'Admin' ) {

            return redirect('admin');
        }elseif(Auth::user()->userType == 'SuperAdmin' ){
            return redirect('sadmin');
        }else{
            return redirect('/');
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
