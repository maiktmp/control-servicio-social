<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DispExternos
 *
 * @property int $id
 * @property int $dia
 * @property int $hr_ent
 * @property int $hr_sal
 * @property int $id_ext
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos query()
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereDia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereHrEnt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereHrSal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereIdExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DispExternos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DispExternos extends Model
{
    protected $table = "disp__externos";
}
