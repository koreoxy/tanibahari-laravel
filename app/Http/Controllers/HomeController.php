<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "products" => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "title" => "Single product page",
            "product" => $product
        ]);
    }
}
