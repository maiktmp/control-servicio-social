<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AlumnosInternos
 *
 * @property int $id
 * @property string $no_ctl
 * @property string $carrera
 * @property int $semestre
 * @property string $no_of
 * @property int $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereApM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereApP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereNoCtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereNoOf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereSemestre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosInternos whereUserId($value)
 * @mixin \Eloquent
 */
class AlumnosInternos extends Model
{
    protected $table = "alumnos_internos";

    protected $fillable = [
        "no_ctl",
        "periodo",
        "semestre",
        "no_of",
        "carrera_id"
    ];

    public function user()
    {
        return $this->belongsTo(
            Users::class,
            "user_id",
            "id"
        );
    }
    public function carrera()
    {
        return $this->belongsTo(
            Carreras::class,
            "carrera_id",
            "id"
        );
    }
}
