<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Departamentos;
use App\Models\Users;

class DeptoController extends Controller
{

    public function index()
    {
        $deptos = Departamentos::whereStatus(true)
            ->paginate(15);
        return view("admin.deptos.index", ['departamentos' => $deptos]);
    }


}
