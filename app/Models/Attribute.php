<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class Attribute extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['name'];
    protected $guarded = [];
    public function attributeOption()
    {
        return $this->hasMany(Attribute_option::class, 'attribute_id');
    }

}
