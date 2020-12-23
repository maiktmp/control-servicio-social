<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboUpdatePostRequest extends FormRequest
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
            'username' => 'min:4|unique:users,username,'. $this->userId,
            'password' => 'confirmed',
        ];
    }

    public function messages(){
        return [
            'username.unique'=> 'El nombre de usuario insertado está en uso',
            'username.min'=> 'El nombre de usuario es muy corto, introduzca al menos 4 caracteres',
            'password.confirmed'=> 'La contraseña no coincide',
        ];
    }
}
