<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class HomeController extends Controller
{

    public function index()
    {
        return view(
            'frontend.index',
            [
                'products' => Products::paginate(8),
                'product_popular' => Products::all()->random(5),
            ]
        );
    }

}
