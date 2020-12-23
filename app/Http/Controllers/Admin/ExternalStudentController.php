<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumnosExternos;
use App\Models\Rol;
use App\Models\Users;
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
        return response()->redirectToRoute("admin_external_student_index");
    }

}
