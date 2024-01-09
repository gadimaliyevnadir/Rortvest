<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Langlable
{
    protected static function bootLanglable()
    {
        static::saving(function ($model) {
            if (empty($model->title)) {
                $model->title;
            }
            if (empty($model->desc)) {
                $model->desc;
            }
             if (empty($model->subtitle)) {
                $model->subtitle;
            }
        });
    }
}
