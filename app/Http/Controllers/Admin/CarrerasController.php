<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Carreras;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public function index()
    {
        $carreras = Carreras::whereStatus(true)
            ->paginate(15);
        return view("laboratorista.carreras.index", ['carreras' => $carreras]);
    }

}
