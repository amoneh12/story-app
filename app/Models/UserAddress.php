<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable=['id', 'user_id', 'address', 'city', 'state', 'country', 'postal_code',
     'phone', 'email', 'name', 'surname']; 
    protected $table = 'product_images';
}
