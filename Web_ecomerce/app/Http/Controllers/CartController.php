<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Latestproduct;


class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cart = $user->cart;
        $userId = $user->id;
        if (!$cart) {
            return view('cart', ['products' => collect()]);
        }
        $cartItems = Cart::with('product')->where('user_id', $userId)->get();
        $data_latestproduct = Latestproduct::all();
        $products = $cart->products;
        $data_category = Category::all();
        $product_cart = Product::paginate(5);
        return view('cart', compact('products','data_category','data_latestproduct','product_cart','cartItems'));
    }

    public function add(Request $request, $productId)
    {
        $user = Auth::user();

        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);
        $product = Product::findOrFail($productId);

        $quantity = $request->input('quantity', 1);

        if ($cart->products()->where('product_id', $productId)->exists()) {
            // Nếu đã có sản phẩm, cộng thêm số lượng
            $cart->products()->updateExistingPivot($productId, [
                'quantity' => \DB::raw("quantity + $quantity")
            ]);
        } else {
            $cart->products()->attach($productId, ['quantity' => $quantity]);
        }

        return redirect()->route('cart.index')->with('success', 'Đã thêm vào giỏ hàng');
    }

    public function update(Request $request, $productId)
    {
        $user = Auth::user();
        $cart = $user->cart;

        $quantity = (int)$request->input('quantity');

        if ($quantity <= 0) {
            $cart->products()->detach($productId);
        } else {
            $cart->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        }

        return redirect()->route('cart.index')->with('success', 'Đã cập nhật giỏ hàng');
    }

    public function remove($productId)
    {
        $user = Auth::user();
        $cart = $user->cart;

        $cart->products()->detach($productId);

        return redirect()->route('cart.index')->with('success', 'Đã xoá sản phẩm khỏi giỏ');
    }

    public function clear()
    {
        $user = Auth::user();
        $cart = $user->cart;

        $cart->products()->detach();

        return redirect()->route('cart.index')->with('success', 'Đã xoá toàn bộ giỏ hàng');
    }
}
