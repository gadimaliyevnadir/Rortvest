<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Attribute_option extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['name'];
    protected $guarded = [];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }


    public function getAttribute1(){
        return $this->hasOne(Attribute::class,'id', 'attribute_id');
    }


    public function products()
    {
        return $this->belongsToMany(Attribute_option::class, 'attributeoptions_products', 'product_id', 'attributeoption_id');
    }
}
