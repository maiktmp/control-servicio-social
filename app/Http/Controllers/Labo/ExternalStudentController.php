<?php

namespace App\Http\Controllers\Labo;

use App\Http\Controllers\Controller;
use App\Models\AlumnosExternos;
use App\Models\Rol;
use App\Models\Users;
use Illuminate\Http\Request;

class ExternalStudentController extends Controller
{

    public function index()
    {
        $e_students = AlumnosExternos::whereStatus(true)
            ->paginate(15);
        return view("laboratorista.external_student.index", ['e_students' => $e_students]);
    }

}
