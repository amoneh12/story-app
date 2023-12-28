<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsColor extends Model
{
    use HasFactory;
    protected $fillable=['id', 'product_id', 'color']; 
    protected $table = 'products_color';

    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function productsColorSize()
    {
        return $this->hasMany(ProductsColorSize::class);
    }
}
