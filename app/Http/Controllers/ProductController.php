<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart_item;
class ProductController extends Controller
{
    //
    //written by Binh_mod
    public function show(string $id)
    {
        //
        $cart_id = 1;
        $cart_items = Cart_item::where('cart_id', $cart_id);
        $cartCount = $cart_items->count();
        $product = Product::find($id);
        // dd($product);
        return view('cart.add',compact('product','cartCount'));
    }
}
