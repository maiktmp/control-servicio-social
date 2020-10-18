<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')
               ->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request)
    {
        $remember = false;
        $loginParams = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'status' => 1
        ];

        if (Auth::attempt($loginParams, $remember)) {

            // Switch
            // $user->rol
            // $user->rol === 1 => home_admin
            // $user->rol === 2 => student_admin
            // $user->rol === 3 => laboratorista_admin

            return redirect()->intended(route('home_admin'));
        } else {
            return back()
                ->withErrors((['email' => 'Email o contraseña incorrectos.']))
                ->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
