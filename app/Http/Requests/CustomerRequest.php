<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name' => ['required', 'string', 'min:3', 'max:30', 'unique'],
        'last_name' => ['required', 'string', 'min:3', 'max:30'],
        'age' => ['required', 'string', 'max:3'],
        'identification_card' => ['required', 'string', 'max:14'],
        ];
    }

    public function messages(): array
    {
        return [

        'name.required' => 'El nombre es requerido',
        'name.string' => 'Debe ingresar texto',
        'name.min' => 'El minimo de texto es de 3',
        'name.max' => 'El maximo de texto es de 30',

        'last_name.required' => 'El apellido es requerido',
        'last_name.string' => 'Debe ingresar texto',
        'last_name.min' => 'El minimo de texto es de 3',
        'last_name.max' => 'El maximo de texto es de 30',


        'age.required' => 'La edad es requerida',
        'age.string' => 'Debe ingresar numeros',
        'age.max' => 'El maximo de texto es de 3',

        'identification_card.required' => 'La cedula es requerida',
        'idenfitication_card.string' => 'Debe ingresar texto y numeros',
        'identification.max' => 'El maximo de texto o numeros es de 14',
        ];
    }
}
