<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'tag_id' => 'required',
            'slug' => 'required|array',
            'desc' => 'required|array',
            // 'date' => 'string',
            'image' => 'image|mimes:jpg,png,jpeg,webp,avif',
        ];
    }
}
