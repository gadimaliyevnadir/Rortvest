<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\Langlable;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    use langlable;
    use HasTranslations;
    public $translatable = ['slug', 'name'];
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blogs_tags', 'tag_id', 'blog_id');
    }
}
