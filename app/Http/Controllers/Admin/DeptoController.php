<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public function index()
    {
        $deptos = Departamentos::whereStatus(true)
            ->paginate(15);
        return view("admin.deptos.index", ['departamentos' => $deptos]);
    }


    public function create()
    {
        return view("admin.deptos.create");
    }

    public function createPost(Request $req)
    {
        $depto = new Departamentos();
        $depto->fill($req->all());
        $depto->status = true;
        $depto->save();
        return response()->redirectToRoute("admin_departments_index");
    }

    public function update($deptoId)
    {
        $depto = Departamentos::find($deptoId);
        return view("admin.deptos.update", ["departamento" => $depto]);
    }

    public function updatePost(Request $req, $deptoId)
    {
        $depto = Departamentos::find($deptoId);
        $depto->fill($req->all());
        $depto->save();
        return response()->redirectToRoute("admin_departments_index");
    }

    public function delete($deptoId)
    {
        $depto = Departamentos::find($deptoId);
        $depto->status = false;
        $depto->save();
        return response()->redirectToRoute("admin_departments_index");
    }

}
