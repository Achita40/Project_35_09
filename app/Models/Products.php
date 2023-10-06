<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{

    use HasFactory;

    protected $table = "products";

    protected $fillable = [

        'product_name',
        'product_price',
        'product_image',
        'product_detail',
        'typeproduct',

    ];

    protected $casts = [

        'product_price' => 'float',

    ];

    public function Type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'typeproduct');
    }

}
