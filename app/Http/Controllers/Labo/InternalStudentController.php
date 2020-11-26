<?php

namespace App\Http\Controllers\Labo;

use App\Http\Controllers\Controller;
use App\Models\AlumnosInternos;
use App\Models\Rol;
use App\Models\Users;
use Illuminate\Http\Request;

class InternalStudentController extends Controller
{

    public function index()
    {
        $students = AlumnosInternos::whereStatus(true)
            ->paginate(15);
        return view("laboratorista.internal_student.index", ['students' => $students]);
    }


}
