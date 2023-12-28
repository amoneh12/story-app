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

}