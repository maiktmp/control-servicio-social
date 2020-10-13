<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReportesExternos
 *
 * @property int $id
 * @property string $fecha
 * @property int $horas
 * @property int $hr_totales
 * @property int $id_ext
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereHoras($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereHrTotales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereIdExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesExternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReportesExternos extends Model
{
    protected $table = "reportes_externos";
}
