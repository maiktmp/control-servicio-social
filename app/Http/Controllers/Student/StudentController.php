<?php


namespace App\Http\Controllers\Student;


use App\Http\Controllers\Controller;
use App\Models\AlumnosExternos;
use App\Models\AlumnosInternos;
use App\Models\RegistrosExternos;
use App\Models\RegistrosInternos;
use App\Models\ReportesExternos;
use App\Models\ReportesInternos;
use App\Models\Rol;
use App\User;
use Carbon\Carbon;

class StudentController extends Controller
{

    public function registerHour()
    {
        if (\Auth::user()->tipo_usr === Rol::Interno) {
            return $this->registerInternal();
        } else {
            return $this->registerExternal();
        }
    }

    private function registerInternal()
    {
        $internal = AlumnosInternos::whereUserId(\Auth::id())->first();

        $lastRegister = RegistrosInternos::whereHrSal("00:00:00")
            ->whereIdInt($internal->id)
            ->latest("id")
            ->first();

        if ($lastRegister !== null) {
            $lastRegister->hr_sal = Carbon::now();
            $lastRegister->hr_totales = Carbon::now()->diffInHours($lastRegister->hr_ent);
            $lastRegister->save();
//            $this->generateInternalReport($internal->id, Carbon::now()->diffInHours($lastRegister->hr_ent));
            return response()->json([
                "message" => "Registraste " . Carbon::now()->diffInHours($lastRegister->hr_ent) . " horas"
            ]);
        } else {
            $register = new RegistrosInternos();
            $register->id_int = $internal->id;
            $register->hr_ent = Carbon::now();
            $register->hr_sal = 0;
            $register->hr_totales = 0;
            $register->status = 1;
            $register->save();
            return response()->json([
                "message" => "Registro de entrada realizado satisfactoriamente, por favor cierra sesión"
            ]);
        }
    }

    private function registerExternal()
    {
        $external = AlumnosExternos::whereUserId(\Auth::id())->first();

        $lastRegister = RegistrosExternos::whereHrSal("00:00:00")
            ->whereIdExt($external->id)
            ->latest("id")
            ->first();

        if ($lastRegister !== null) {
            $lastRegister->hr_sal = Carbon::now();
            $lastRegister->hr_totales = Carbon::now()->diffInHours($lastRegister->hr_ent);
            $lastRegister->save();
//            $this->generateExternalReport($external->id, Carbon::now()->diffInHours($lastRegister->hr_ent));
            return response()->json([
                "message" => "Registraste " . Carbon::now()->diffInHours($lastRegister->hr_ent) . " horas"
            ]);
        } else {
            $register = new RegistrosExternos;
            $register->id_ext = $external->id;
            $register->hr_ent = Carbon::now();
            $register->hr_sal = 0;
            $register->hr_totales = 0;
            $register->status = 1;
            $register->save();
            return response()->json([
                "message" => "Registro de entrada realizado satisfactoriamente, por favor cierra sesión"
            ]);
        }
    }

    public function generateInternalReport($studentId, $hours)
    {
        $report = new ReportesInternos();
        $report->id_int = $studentId;
        $report->horas = $hours;
        $report->fecha = Carbon::now();
        $report->status = 1;
        $report->hr_totales = ReportesInternos::whereIdInt($studentId)->sum("horas") + $hours;
        $report->save();
    }

    public function generateExternalReport($studentId, $hours)
    {
        $report = new ReportesExternos();
        $report->id_ext = $studentId;
        $report->horas = $hours;
        $report->fecha = Carbon::now();
        $report->status = 1;
        $report->hr_totales = ReportesInternos::whereIdInt($studentId)->sum("horas") + $hours;
        $report->save();
    }

}
