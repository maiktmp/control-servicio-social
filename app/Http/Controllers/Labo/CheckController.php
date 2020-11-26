<?php


namespace App\Http\Controllers\Labo;


use App\Http\Controllers\Controller;
use App\Models\Departamentos;
use App\Models\RegistrosExternos;
use App\Models\RegistrosInternos;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(Request $req)
    {
        if ($req->get("type", "internal") === "internal") {
            $registers = RegistrosInternos::whereStatus(true)
                ->paginate(15);
        } else {
            $registers = RegistrosExternos::whereStatus(true)
                ->paginate(15);
        }


        return view("laboratorista.check.index", [
            'registers' => $registers,
            'type' => $req->get("type", "internal")]);
    }

    public function createComments(Request $req, $registerId)
    {
        if ($req->get("type", "internal") === "internal") {
            $register = RegistrosInternos::find($registerId);
        } else {
            $register = RegistrosExternos::find($registerId);
        }

        $register->comentarios = $req->input("comment");
        $register->save();
        return response()->json(["success" => true]);
    }

    public function checkRegister(Request $req, $registerId)
    {
        if ($req->get("type", "internal") === "internal") {
            $register = RegistrosInternos::find($registerId);
        } else {
            $register = RegistrosExternos::find($registerId);
        }

        $register->check = $req->input("check") === "true";
        if($register->check === false  ){
            $register->hr_totales = 0;
        }
        $register->save();
        return response()->json(["success" => true]);
    }

}
