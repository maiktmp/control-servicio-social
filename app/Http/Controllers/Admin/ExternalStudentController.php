<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumnosExternos;
use App\Models\AlumnosInternos;
use App\Models\DispExternos;
use App\Models\DispInternos;
use App\Models\Rol;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ExternalCreatePostRequest;
use App\Http\Requests\ExternalUpdatePostRequest;

class ExternalStudentController extends Controller
{

    public function index()
    {
        $e_students = AlumnosExternos::whereStatus(true)
            ->paginate(15);
        return view("admin.external_student.index", ['e_students' => $e_students]);
    }

    public function create()
    {
        return view("admin.external_student.create");
    }

    public function createPost(ExternalCreatePostRequest $req)
    {
        try {
            \DB::beginTransaction();

            $user = new Users();
            $user->fill($req->input("user"));
            $user->password = bcrypt($user->password);
            $user->status = true;
            $user->tipo_usr = Rol::Externo;
            $user->saveOrFail();

            $student = new AlumnosExternos();
            $student->fill($req->all());
            $student->status = true;
            $student->user_id = $user->id;
            $student->saveOrFail();

            \DB::commit();
            return response()->redirectToRoute("admin_external_student_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function update($studentId)
    {
        $student = AlumnosExternos::find($studentId);
        return view("admin.external_student.update", ["student" => $student]);
    }

    public function updatePost(ExternalUpdatePostRequest $req, $studentId)
    {
        try {
            \DB::beginTransaction();
            $student = AlumnosExternos::find($studentId);
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
            return response()->redirectToRoute("admin_external_student_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function delete($studentId)
    {
        $student = AlumnosExternos::find($studentId);
        $student->status = false;
        $student->save();
        $student->user->status = false;
        $student->user->save();
        return response()->redirectToRoute("admin_external_student_index");
    }

    public function showAvailability($studentId)
    {
        $student = AlumnosExternos::find($studentId);
        $disponibilidad = $student->disponibilidad()
            ->orderByRaw('FIELD(dia, "Lunes", "Martes", "Míercoles","Jueves","Viernes")')
            ->get();
        return view("admin.external_student.availability", ["student" => $student, "disponibilidad" => $disponibilidad]);
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
        $disp = new DispExternos();
        $disp->fill($request->all());
        $disp->id_ext = $studentId;
        $disp->status = true;
        $disp->save();

        return back();
    }

}
