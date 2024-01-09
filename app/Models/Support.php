<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\Langlable;
class Support extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['subtitle', 'title'];
    protected $guarded=[];
}
