<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AlumnosExternos
 *
 * @property int $id
 * @property string $matricula
 * @property string $ap_p
 * @property string $ap_m
 * @property string $nombre
 * @property string $procedencia
 * @property string $no_of
 * @property int $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereApM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereApP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereMatricula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereNoOf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereProcedencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlumnosExternos whereUserId($value)
 * @mixin \Eloquent
 */
class AlumnosExternos extends Model
{
    protected $table = "alumnos_externos";
}
