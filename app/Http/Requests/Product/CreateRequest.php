<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|array',
            'desc' => 'required|array',
            'category_id' => 'required|string',
            'best_id' => 'required|string',
            'firstimage'=>'required|image|mimes:jpg,png,jpeg,webp,avif',
            'secondimage' => 'required|image|mimes:jpg,png,jpeg,webp,avif',
            'image.*' => 'required|image',
        ];
    }
}
