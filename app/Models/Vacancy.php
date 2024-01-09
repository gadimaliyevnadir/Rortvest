<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Vacancy extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable=['desc','title'];
    protected $guarded=[];
}
