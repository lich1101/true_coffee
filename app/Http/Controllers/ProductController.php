<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    //written by Binh_mod
    public function show(string $id)
    {
        //
        $product = Product::find($id);
        // dd($product);
        return view('cart.add',compact('product'));
    }
}
