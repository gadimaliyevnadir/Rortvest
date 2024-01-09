<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;


class Subcategory extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['title','slug'];
    protected $guarded=[];
    use Sluggable;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
