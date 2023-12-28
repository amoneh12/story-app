<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsSize extends Model
{
    use HasFactory;
    protected $fillable=['id', 'product_id', 'size']; 
    protected $table = 'product_sizes';

    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function productsColorSize()
    {
        return $this->hasMany(ProductsColorSize::class);
    }
}
