<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    use HasFactory;

    protected $table = "products";

    protected $fillable = [

        'product_name',
        'product_price',
        'product_image',
        'product_detail'

    ];

    protected $casts = [

        'product_price' => 'float'

    ];

}
