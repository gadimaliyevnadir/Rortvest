<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product_image extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
