<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
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
    }
}
