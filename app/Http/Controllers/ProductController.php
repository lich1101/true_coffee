<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->get();
        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        $this->validate([
//            'name' =>'required',
//            'price' =>'required',
//        ]);
//        $path          = Storage::disk('public')->putFile('photo', $request->file('image'));
//        $arr           = $request;
//        $arr['image_url'] = $path;
        Product::create($request->all());
        return redirect()->route('admin.products.index')->with('status', 'Them san pham thanh cong');
    }

    public function show($product){
        return view('admin.products.show', [
            'product' => $product,
        ]);
    }

    public function edit($id){
        $product = Product::query()->findOrFail($id);
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, $product){
//        $this->validate($request, [
//            'name' =>'required',
//            'price' =>'required',
//        ]);
        $product = Product::query()->findOrFail($product);
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('status', 'Sua san pham thanh cong');
    }

    public function destroy($product){
        Product::destroy($product);
        return redirect()->route('admin.products.index')->with('status', 'Xoa san pham thanh cong');
    }
}
