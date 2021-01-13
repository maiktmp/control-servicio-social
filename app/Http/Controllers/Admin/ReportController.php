<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumnosExternos;
use App\Models\AlumnosInternos;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function generateReport(Request $request)
    {
        $interal = $request->input("internal");
        $studentId = $request->input("studentId");
        $user = null;
//        return dd($request->all());
        if ($interal) {
            $user = AlumnosInternos::find($studentId);
        } else {
            $user = AlumnosExternos::find($studentId);
        }


        return view("general.report.report", ["user" => $user, "data" => $request->all()]);
    }

}
