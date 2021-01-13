<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumnosInternos;
use App\Models\DispInternos;
use App\Models\Rol;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\InternalCreatePostRequest;
use App\Http\Requests\InternalUpdatePostRequest;


class InternalStudentController extends Controller
{

    public function index()
    {
        $students = AlumnosInternos::whereStatus(true)
            ->paginate(15);
        return view("admin.internal_student.index", ['students' => $students]);
    }

    public function create()
    {
        return view("admin.internal_student.create");
    }

    public function createPost(InternalCreatePostRequest $req)
    {
        try {
            \DB::beginTransaction();
            $user = new Users();
            $user->fill($req->input("user"));
            $user->password = bcrypt($user->password);
            $user->status = true;
            $user->tipo_usr = Rol::Interno;
            $user->saveOrFail();

            $student = new AlumnosInternos();
            $student->fill($req->all());
            $student->status = true;
            $student->user_id = $user->id;
            $student->saveOrFail();

            \DB::commit();
            return response()->redirectToRoute("admin_internal_student_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function update($studentId)
    {
        $student = AlumnosInternos::find($studentId);
        return view("admin.internal_student.update", ["student" => $student]);
    }

    public function updatePost(InternalUpdatePostRequest $req, $studentId)
    {
        try {
            \DB::beginTransaction();
            $student = AlumnosInternos::find($studentId);
            $user = $student->user;

            $oldPassword = $user->password;
            $user->fill($req->input("user"));
            if ($req->input("password", null) !== null) {
                $user->password = bcrypt($user->password);
            } else {
                $user->password = $oldPassword;
            }
            $user->saveOrFail();

            $student->fill($req->all());
            $student->status = true;
            $student->saveOrFail();

            \DB::commit();
            return response()->redirectToRoute("admin_internal_student_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function delete($studentId)
    {
        $student = AlumnosInternos::find($studentId);
        $student->status = false;
        $student->save();
        $student->user->status = false;
        $student->user->save();
        return response()->redirectToRoute("admin_internal_student_index");
    }

    public function showAvailability($studentId)
    {
        $student = AlumnosInternos::find($studentId);
        $disponibilidad = $student->disponibilidad()
            ->orderByRaw('FIELD(dia, "Lunes", "Martes", "Míercoles","Jueves","Viernes")')
            ->get();
        return view("admin.internal_student.availability", ["student" => $student, "disponibilidad" => $disponibilidad]);
    }

    public function createAvailability(Request $request, $studentId)
    {
        $startTime = Carbon::createFromFormat("h:i A", $request->input("hr_ent"));
        $endTime = Carbon::createFromFormat("h:i A", $request->input("hr_sal"));
        if ($endTime->lessThan($startTime)) {
            return back()
                ->withInput()
                ->withErrors(["general" => "La hora de  salida debe ser superior a la de entrada"]);
        }
        $disp = new DispInternos();
        $disp->fill($request->all());
        $disp->id_int = $studentId;
        $disp->status = true;
        $disp->save();

        return back();
    }
}

