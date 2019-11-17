<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->route('user');
        return $this->user()->can('update', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'name' => 'required|string|max:255',
            'dob' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->route('user')->id.'',
            

        ];
    }


    public function messages()
    {
        return [
            
            'name.required' => 'required|string|max:255',
            'name.string' => 'El valor no es el correcto',
            'name.max' => 'solo se permiten 255 caracteres',
            'dob.required' => 'Este campo es requerido',
            'email.required' => 'Este campo es requerido',
            'email.string' => 'El valor no es el correcto',
            'email.max' => 'solo se permiten 255 caracteres',
            'email.unique' => 'Este correo ya esta registrado',
            

        ];
    }
}
