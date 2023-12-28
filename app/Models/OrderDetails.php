<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable=['id', 'order_id', 'color_size_id',
     'quantity', 'price', 'discount'];
     protected $table = 'order_details';

     public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function productsColorSize()
    {
        return $this->belongsTo(ProductColorSize::class);
    }
}
