<?php

namespace App\Http\Requests\User;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return $this->user()->can('create', User::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role' => 'required|numeric',
            'name' => 'required|string|max:255',
            'dob' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

        ];
    }


    public function messages()
    {
        return [
            'role.required' => 'Este campo es requerido',
            'role.numeric' => 'El valor no es el correcto',
            'name.required' => 'required|string|max:255',
            'name.string' => 'El valor no es el correcto',
            'name.max' => 'solo se permiten 255 caracteres',
            'dob.required' => 'Este campo es requerido',
            'email.required' => 'Este campo es requerido',
            'email.string' => 'El valor no es el correcto',
            'email.max' => 'solo se permiten 255 caracteres',
            'email.unique' => 'Este correo ya esta registrado',
            'password.required' => 'Este campo es requerido',
            'password.string' => 'El valor no es el correcto',
            'password.min' => 'Tu contraseña debe de tner al menos 6 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',


        ];
    }
}
