<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExternalCreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_of' => 'unique:alumnos_externos,no_of|unique:alumnos_internos,no_of|max:4',
            'user.username' => 'unique:users,username|min:4',
            'user.password' => 'min:5|confirmed',
        ];
    }
     public function messages(){
        return [
            'no_of.max'=> 'El folio de servicio tiene más de 4 caracteres',
            'no_of.unique'=> 'El folio ya ha sido asignado a otro alumno',
            'user.username.unique'=> 'El nombre de usuario insertado está en uso',
            'user.username.min'=> 'El nombre de usuario es muy corto, introduzca al menos 4 caracteres',
            'user.password.min'=> 'La contraseña debe contener al menos 5 caracteres',
            'user.password.confirmed'=> 'La contraseña no coincide',
        ];
    }
}
