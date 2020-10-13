<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReportesInternos
 *
 * @property int $id
 * @property string $fecha
 * @property int $horas
 * @property int $hr_totales
 * @property int $id_int
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereHoras($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereHrTotales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereIdInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReportesInternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReportesInternos extends Model
{
    protected $table = "reportes_internos";
}
