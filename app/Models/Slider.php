<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory;
    use langlable;
    use HasTranslations;
    public $translatable = ['title', 'subtitle'];
    protected $guarded=[];
}
