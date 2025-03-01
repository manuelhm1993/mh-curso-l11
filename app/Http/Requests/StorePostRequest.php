<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Cambiar a true porque las autorizaciones se hacen con roles y permisos
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'    => ['required', 'min:5', 'max:255'], //Forma alternativa de crear reglas
            'slug'     => 'required|min:5|max:255|unique:posts', //Valida que no exista en la DB
            'content'  => 'required',
            'category' => 'required|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required. (edited)',
            'slug.required'  => 'A slug is required. (edited)',
        ];
    }
}
