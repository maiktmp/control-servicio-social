<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Laboratoristas
 *
 * @property int $id
 * @property string $ap_p
 * @property string $ap_m
 * @property string $nombre
 * @property int $departamento_id
 * @property int $user_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereApM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereApP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereDepartamentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratoristas whereUserId($value)
 * @mixin \Eloquent
 */
class Laboratoristas extends Model
{
    protected $table = "laboratoristas";
}
