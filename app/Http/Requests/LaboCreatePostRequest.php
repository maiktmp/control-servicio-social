<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboCreatePostRequest extends FormRequest
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
            'username' => 'required|unique:users,username|min:4',
            'password' => 'required|min:5|confirmed',
        ];
    }

    public function messages(){
        return [
            'username.unique'=> 'El nombre de usuario insertado está en uso',
            'username.min'=> 'El nombre de usuario es muy corto, introduzca al menos 4 caracteres',
            'password.min'=> 'La contraseña debe contener al menos 5 caracteres',
            'password.confirmed'=> 'La contraseña no coincide',
        ];
    }
}
