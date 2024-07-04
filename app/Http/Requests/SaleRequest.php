<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
        'name' => ['required', 'string', 'min:3', 'max:30'],
        'description' => ['required', 'string', 'min:3', 'max:100'],
        'price' => ['required', 'float'],
        ];
    }

    public function messages(): array
    {
        return [
        'name.required' => 'El nombre es requerido',
        'name.string' => 'Debe ingresar texto',
        'name.min' => 'El minimo de texto es de 3',
        'name.max' => 'El maximo de texto es de 30',

        'description.required' => 'La descripcion es requerida',
        'description.string' => 'Debe ingresar texto',
        'description.min' => 'El minimo de texto es de 3',
        'description.max' => 'El maximo de texto es de 100',

        'price.required' => 'El precio es requerido',
        'price.float' => 'Debe insertar valores numericos',
        ];
    }

}