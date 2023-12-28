<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $fillable=['id', 'color_size_id', 'image']; 
    protected $table = 'product_images';

    public function productsColorSize()
    {
        return $this->belongsTo(ProductsColorSize::class);
    }

}
