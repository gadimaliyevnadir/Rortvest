<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|min:3',
            'last_name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vacibdir',
            'last_name.required' => 'Vacibdir',
            'email.required' => 'Vacibdir',
            'phone.required' => 'Vacibdir',
        ];
    }
}
