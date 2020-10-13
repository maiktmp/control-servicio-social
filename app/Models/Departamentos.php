<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Departamentos
 *
 * @property int $id
 * @property string $nombre
 * @property string $jefe
 * @property string $grado
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereGrado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereJefe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamentos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Departamentos extends Model
{
    protected $table = "departamentos";

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function mapData()
    {
        return self::whereStatus(true)
            ->pluck("nombre", "id");
        // 3 => x
        // 4 => y
        // 20 => a
    }
}
