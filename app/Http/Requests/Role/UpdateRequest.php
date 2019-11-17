<?php

namespace App\Http\Requests\Role;

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
        $role = $this->route('role');
        return $this->user()->can('update', $role);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name,'.$this->route('role')->id.'|max:255',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'El nombre ya esta ingresado',
            'description.required' => 'La descripcion es requerida',
        ];
    }
}
