<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;

class CartController extends Controller
{
    public function listproduct(Cart $cart,Product $product){
        $cartItems = $cart->getList();
        $data_latestproduct = Latestproduct::all();
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3);
        return view('cart', compact('cartItems','data_latestproduct','product_cart','data_category','product'));
    }
    public function add(Request $request,Cart $cart)
    {
        $product = Product::find($request -> id);
        $quantity = $request->input('quantity',1); //lấy giá trị từ input, neu khong thi = 1
        $cart->add($product,$quantity);
        return redirect()->route('cart.product','listproduct');
    }

    function addJustOne($id,Cart $cart) {
        if ($product = Product::find($id)) {
            $cart->add($product);
        }
        return redirect()->route('cart.product','listproduct');

    }
    function remove($id,Cart $cart) {
        if ($product = Product::find($id)) {
            $cart->remove($id);
        }
        return redirect()->route('cart.product','listproduct');
    }
    public function update(Request $request, Cart $cart) {
        $quantities = $request->input('quantities', []);

        foreach ($quantities as $productId => $quantity) {
            $cart->update($productId, $quantity);
        }

        return redirect()->route('cart.product', 'listproduct')->with('success', 'Giỏ hàng đã được cập nhật');
    }

}