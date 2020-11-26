<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RegistrosInternos
 *
 * @property int $id
 * @property string $hr_ent
 * @property string $hr_sal
 * @property int $hr_totales
 * @property int $check
 * @property string $comentarios
 * @property int $id_int
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereComentarios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereHrEnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereHrSal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereHrTotales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereIdInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosInternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RegistrosInternos extends Model
{
    protected $table = "registros_internos";
    protected $dates = ["hr_ent","hr_sal"];


    public function student(){
        return $this->belongsTo(
            AlumnosInternos::class,
            "id_int",
            "id"
        );
    }
}
