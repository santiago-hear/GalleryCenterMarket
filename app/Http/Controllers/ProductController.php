<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use App\Models\User;

class ProductController extends Controller
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
        return view('administrator.product.index', ['products' => $products, 'sellers' => $sellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id', 'category_name');
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('administrator.product.create', ['product' => new Product(), 'categories' => $categories, 'sellers' => $sellers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::create($request -> validated());
        return back()->with('status','Producto genereado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::pluck('id', 'category_name');
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('administrator.product.show', ['product' => $product, 'categories' => $categories, 'sellers' => $sellers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('id', 'category_name');
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('administrator.product.edit', ['product' => $product, 'categories' => $categories, 'sellers' => $sellers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product -> update($request -> validated());
        return back()->with('status','Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product -> delete();
        return back()->with('status','Producto eliminado con éxito');
    }
}
