<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brendlogo extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->link)) {
                $model->link = '#';
            }
        });
    }
}
