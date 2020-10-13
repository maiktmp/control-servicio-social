<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RegistrosExternos
 *
 * @property int $id
 * @property string $hr_ent
 * @property string $hr_sal
 * @property int $hr_totales
 * @property int $check
 * @property string $comentarios
 * @property int $id_ext
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereComentarios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereHrEnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereHrSal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereHrTotales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereIdExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RegistrosExternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RegistrosExternos extends Model
{
    protected $table = "registros_externos";
}
