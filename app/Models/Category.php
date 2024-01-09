<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['title'];
    protected $guarded = [];
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class,'category_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
