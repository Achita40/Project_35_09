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
                'products' => Products::latest()->paginate(10),
            ]
        );
    }

    public function create()
    {
        return view('admin.product.create');
    }



}
