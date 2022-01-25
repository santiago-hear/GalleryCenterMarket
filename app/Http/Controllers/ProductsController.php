<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(10);
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing.products.index', ['products' => $products, 'sellers' => $sellers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::pluck('id', 'category_name');
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing.products.show', ['product' => $product, 'categories' => $categories, 'sellers' => $sellers]);
    }
}
