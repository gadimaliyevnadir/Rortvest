<?php

namespace App\Http\Requests\MetaTags;

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
            'home_title'=>'required|array',
            'home_desc' => 'required|array',
            'home_keywords' => 'required|array',
            'category_title' => 'required|array',
            'category_desc' => 'required|array',
            'category_keywords' => 'required|array',
            'vacancy_title' => 'required|array',
            'vacancy_desc' => 'required|array',
            'vacancy_keywords' => 'required|array',
            'blog_title' => 'required|array',
            'blog_desc' => 'required|array',
            'blog_keywords' => 'required|array',
            'about_title' => 'required|array',
            'about_desc' => 'required|array',
            'about_keywords' => 'required|array',
            'contact_title' => 'required|array',
            'contact_desc' => 'required|array',
            'contact_keywords' => 'required|array',
        ];
    }
}
