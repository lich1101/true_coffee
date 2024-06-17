<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart_item;
use App\Models\Product;

class CartController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart_items = Cart_item::all();
        // $cart_item = Cart_item::find(1);
        foreach ($cart_items as $cart_item) {
            $product = Product::find($cart_item->product_id);
            $cart_item['image'] = $product->image;
        } 
        // dd($cart_items);
        return view('cart.list',compact('cart_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cart.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
