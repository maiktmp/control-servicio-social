<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DispInternos
 *
 * @property int $id
 * @property int $dia
 * @property int $hr_ent
 * @property int $hr_sal
 * @property int $id_int
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereDia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereHrEnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereHrSal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereIdInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispInternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DispInternos extends Model
{
    protected $table = "disp__internos";
}
