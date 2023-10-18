<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\ProductType;
use App\Models\User;

class DashboardController extends Controller
{

    public function index()
    {
        return view(
            'dashboard',
            [
                'count_product' => Products::all()->count(),
                'sum_price' => Products::all()->sum('product_price'),
                'count_type' => ProductType::all()->count(),
                'count_user' => User::all()->count(),
            ]
        );
    }

}
