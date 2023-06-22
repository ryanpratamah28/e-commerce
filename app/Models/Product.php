<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'product_img',
        'product_category_id',
        'product_category_name',
        'product_count',
        'slug',
    ];
}
