<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class HomeController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('frontend.index', compact('products'));
    }

}
