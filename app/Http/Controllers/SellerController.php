<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = User::all()->where("rol_id",'==', '2');
        return view('landing.sellers.index', ['sellers' => $sellers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(User $seller)
    {
        return view('landing.sellers.show', ['seller' => $seller]);
    }
}
