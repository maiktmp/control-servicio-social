<?php


namespace App\Http\Controllers\Labo;


use App\Http\Controllers\Controller;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public function index()
    {
        $deptos = Departamentos::whereStatus(true)
            ->paginate(15);
        return view("laboratorista.deptos.index", ['departamentos' => $deptos]);
    }

}
