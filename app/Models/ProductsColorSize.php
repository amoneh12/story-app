<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsColorSize extends Model
{
    use HasFactory;
    protected $fillable=['id', 'color_id', 'size_id', 'quantity', 'price_two', 
    'discount', 'status']; 
    protected $table = 'products_color_size';

    public function productColor()
    {
        return $this->belongsTo(ProductsColor::class);
    }

    public function productSize()
    {
        return $this->belongsTo(ProductsSize::class);
    }
}
