<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;

class BestCategory extends Model
{
    use HasTranslations;
    use HasFactory;
    use langlable;
    public $translatable = ['title'];
    protected $guarded = [];
    public function product()
    {
        return $this->hasMany(Product::class, 'best_id');
    }
}
