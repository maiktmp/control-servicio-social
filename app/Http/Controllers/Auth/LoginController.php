<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\Users;
use App\Models\Laboratoristas;
use App\Models\AlumnosExternos;
use App\Models\AlumnosInternos;
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

        $userattempt = Users::whereStatus(true)
            ->whereUsername($request->input('username'))
            ->first();


        if ($userattempt == !null) {
            switch ($userattempt->tipo_usr) {
                case Rol::Externo:
                    $external = AlumnosExternos::whereUserId($userattempt->id)->first();
                    if ($external->status != true) return back()
                        ->withErrors((['email' => 'Usuario deshabilitado']))
                        ->withInput();
                    break;
                case Rol::Interno:
                    $internal = AlumnosInternos::whereUserId($userattempt->id)->first();
                    if ($internal->status != true) return back()
                        ->withErrors((['email' => 'Usuario deshabilitado']))
                        ->withInput();
                    break;
                case Rol::Laboratorista:
                    $labo = Laboratoristas::whereUserId($userattempt->id)->first();
                    if ($labo->status != true) return back()
                        ->withErrors((['email' => 'Usuario deshabilitado']))
                        ->withInput();
                    break;
            }
        }


        if (Auth::attempt($loginParams, $remember)) {
            $user = Auth::user();
            switch ($user->tipo_usr) {
                case Rol::Admin:
                    return redirect()->intended(route('home_admin'));
                case Rol::Externo:
                case Rol::Interno:
                    return redirect()->intended(route('home_student'));
                case Rol::Laboratorista:
                    return redirect()->intended(route('home_labo'));
            }

            return back()
                ->withErrors((['email' => 'Email o contraseña incorrectos.']))
                ->withInput();
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
