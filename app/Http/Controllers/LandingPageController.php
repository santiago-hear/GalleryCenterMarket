<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class LandingPageController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(10);
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing', ['products' => $products, 'sellers' => $sellers]);
    }

    public function show(Product $product)
    {
        $categories = Category::pluck('id', 'category_name');
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing.products.show', ['product' => $product, 'categories' => $categories, 'sellers' => $sellers]);
    }
}
