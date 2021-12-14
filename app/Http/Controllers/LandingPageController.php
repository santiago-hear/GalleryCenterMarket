<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(10);
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing', ['products' => $products, 'sellers' => $sellers]);
    }
}
