<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    protected static function bootSluggable()
    {
        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
