<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laboratoristas;
use App\Models\Rol;
use App\Models\Users;
use Illuminate\Http\Request;

class LaboratoristaController extends Controller
{

    public function index()
    {
        $labo = Laboratoristas::whereStatus(true)
            ->paginate(15);
        return view("admin.laboratorista.index", ['labos' => $labo]);
    }

    public function create()
    {
        return view("admin.laboratorista.create");
    }

    public function createPost(Request $req)
    {
        try {
            \DB::beginTransaction();

            $user = new Users();
            $user->fill($req->input("user"));
            $user->password = bcrypt($user->password);
            $user->status = true;
            $user->tipo_usr = Rol::Laboratorista;
            $user->saveOrFail();

            $labo = new Laboratoristas();
            $labo->fill($req->all());
            $labo->status = true;
            $labo->user_id = $user->id;
            $labo->saveOrFail();

            \DB::commit();
            return response()->redirectToRoute("admin_laboratorista_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function update($laboId)
    {
        $labo = Laboratoristas::find($laboId);
        return view("admin.laboratorista.update", ["labo" => $labo]);
    }

    public function updatePost(Request $req, $laboId)
    {
        try {
            \DB::beginTransaction();
            $labo = Laboratoristas::find($laboId);
            $user = $labo->user;

            $oldPassword = $user->password;
            $user->fill($req->input("user"));
            if ($req->input("password", null) !== null) {
                $user->password = bcrypt($user->password);
            } else {
                $user->password = $oldPassword;
            }
            $user->saveOrFail();

            $labo->fill($req->all());
            $labo->status = true;
            $labo->saveOrFail();

            \DB::commit();
            return response()->redirectToRoute("admin_laboratorista_index");
        } catch (\Throwable $e) {
            \DB::rollBack();
            return back()->withErrors(['msg' => $e->getMessage()]);
        }
    }

    public function delete($laboId)
    {
        $labo =Laboratoristas::find($labotId);
        $labo->status = false;
        $labo->save();
        return response()->redirectToRoute("admin_laboratorista_index");
    }

}
