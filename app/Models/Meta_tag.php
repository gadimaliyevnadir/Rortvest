<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\Langlable;
class Meta_tag extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['home_title', 'home_desc', 'home_keywords',
    'category_title','category_desc','category_keywords',
    'blog_title','blog_desc','blog_keywords','vacancy_title',
    'vacancy_desc','vacancy_keywords','about_title','about_desc','about_keywords',
    'contact_title','contact_desc','contact_keywords'
    ];
    protected $guarded = [];

}
