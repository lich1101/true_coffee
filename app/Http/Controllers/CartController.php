<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart_item;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Requests\Cart_itemStoreRequest;

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
            $cart_item['name'] = $product->name;
        } 
        // dd($cart_items);
        return view('cart.list',compact('cart_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('cart.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Cart_itemStoreRequest $cart_item)
    {
        //
        // Cart::create();

        $cart_id = 1; // Đây là ID của giỏ hàng, cần thay đổi phù hợp với logic của bạn
        // $product_price = Product::find($cart_item->product_id);
        // dd($cart_item->all());
        // Tìm sản phẩm trong giỏ hàng với các tùy chọn tương ứng
        $item = Cart_item::where('cart_id', $cart_id)
            ->where('product_id', $cart_item->product_id)
            ->where('option1', $cart_item->option1)
            ->where('option2', $cart_item->option2)
            ->where('option3', $cart_item->option3)
            ->first();

        if ($item) {
            // Sản phẩm đã tồn tại, cập nhật số lượng
            $item->quantity += $cart_item->quantity;
            // $item->price = $item->quantity * $product_price->price;
            $item->save();
        } else {
            // $cart_item->price = $cart_item->quantity * $product_price->price;

            // Sản phẩm chưa tồn tại, thêm mới
            // dd($cart_item->all());
            Cart_item::create([
                'cart_id' => $cart_id,
                'product_id' => $cart_item->product_id,
                'option1' => $cart_item->option1,
                'option2' => $cart_item->option2,
                'option3' => $cart_item->option3,
                'quantity' => $cart_item->quantity,
                'price' => $cart_item->price,
                'notes' => $cart_item->notes,
            ]);
        }

        return redirect()->back()->with('success','Thêm thành công');


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
