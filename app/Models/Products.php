<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable=['id', 'name', 'description', 'image', 'price', 
    'discount_price', 'category_id']; 
    protected $table = 'products';

    public  function Categorie(){
      return $this->belongsTo(Categorie::class, 'category_id');
  }

  public function productsColorSize(){
      return $this->hasMany(ProductsColorSize::class, 'product_id');
  }

  public function productColor(){
      return $this->hasMany(ProductsColor::class, 'product_id');
  }

  public function productSizes(){
      return $this->hasMany(ProductsSize::class, 'product_id');
  }
}
