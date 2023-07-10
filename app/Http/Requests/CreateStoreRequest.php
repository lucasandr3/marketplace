<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'description' => 'required|string',
            'phone' => 'required|min:9',
            'mobile_phone' => 'required|min:9',
            'slug' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min' => 'Campo deve ter no mínimo :min caracteres'
        ];
    }
}
