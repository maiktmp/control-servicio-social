<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternalUpdatePostRequest extends FormRequest
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
            'no_ctl' => 'min:8|max:9|unique:alumnos_internos,no_ctl,'. $this->studentId,
            'no_of' => 'max:4|unique:alumnos_externos,no_of,' . $this->studentId,
            'no_of' => 'unique:alumnos_internos,no_of,'. $this->studentId,
            'username' => 'min:4|unique:users,username,'. $this->userID,
            'user.password' => 'confirmed',
        ];
    }
    public function messages(){
        return [
            'no_ctl.min'=> 'El número de control tiene menos de 8 caracteres',
            'no_ctl.max'=> 'El número de control tiene más de 9 caracteres',
            'no_ctl.unique'=> 'El número de control es único',
            'no_of.max'=> 'El folio de servicio tiene más de 4 caracteres',
            'no_of.unique'=> 'El folio ya ha sido asignado a otro alumno',
            'username.unique'=> 'El nombre de usuario insertado está en uso',
            'username.min'=> 'El nombre de usuario es muy corto, introduzca al menos 4 caracteres',
            'user.password.confirmed'=> 'La contraseña no coincide',
        ];
    }
}
