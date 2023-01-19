<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use illuminate\Http\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (Auth()->user()->userType == "customer") {
            return redirect('/home')->with('status', 'Welcome to  home');
        } else if (Auth()->user()->userType == "admin") {
            return redirect('/dashboard')->with('status', 'Welcome to  Admin Dashboard');
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
    // public function login(Request $request)
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

    //         if (auth()->user()->userType == "admin") {
    //             return redirect()->route('dashboard');
    //         } else if (auth()->user()->userType == "customer") {
    //             return redirect()->route('home');
    //         }
    //     } else {
    //         return redirect()->route('login')->with('error', 'Email and password are wrong');
    //     }
    // }
}
