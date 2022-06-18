<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tag',
        'product_price',
        'discount_price',
        'active_price',
        'short_descriprion',
        'long_description',
        'additional_info',
        'image',

   ];
  // protected $table='products';
   //protected $table = 'products';
   protected $primaryKey='id';
}
