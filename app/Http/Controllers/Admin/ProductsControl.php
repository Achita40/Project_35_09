<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsControl extends Controller
{
    public function index()
    {
        return view(
            'admin.product.index',
            [
                'products' => Products::paginate(10),
            ]
        );
    }
}
