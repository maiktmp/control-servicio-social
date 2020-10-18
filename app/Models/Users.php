<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Models\Users
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Users query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $departamento_id
 * @property string $username
 * @property string $password
 * @property string $nombre
 * @property string $ap_p
 * @property string $ap_m
 * @property int $tipo_usr
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereApM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereApP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereDepartamentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereTipoUsr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUsername($value)
 */
class Users extends Authenticatable
{
    protected $table = "users";
    protected $fillable = [
        "departamento_id",
        "username",
        "password",
        "ap_p",
        "ap_m",
        "tipo_usr",
        "nombre",
    ];

    public function departamento()
    {
        // A tiene_muchos B  hasToMany
        // B tiene_un A      belongsTo
        return $this->belongsTo(
            Departamentos::class,
            "departamento_id",
            "id"
        );
    }
}
