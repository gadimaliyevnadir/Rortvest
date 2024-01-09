<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Langlable;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    use langlable;
    public $translatable = ['title', 'desc','slug'];
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blogs_tags', 'blog_id', 'tag_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
