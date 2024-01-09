<?php

namespace App\Models;

use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable=['title','desc','slug'];
    protected $guarded=[];
    use Sluggable;
    use langlable;

    public function productImages()
    {
        return $this->hasMany(Product_image::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'category_id');
    }
    public function bestcategory()
    {
        return $this->belongsTo(BestCategory::class, 'best_id');
    }
    public function attribute_options()
    {
        return $this->belongsToMany(Attribute_option::class, 'attributeoptions_products', 'product_id', 'attributeoption_id');
    }
}
