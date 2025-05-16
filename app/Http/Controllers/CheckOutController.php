<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Helper\Cart;

class CheckOutController extends Controller
{
    //
    function index(Cart $cart) {
        $cartItems = $cart->getList();

       return view('checkout', compact('cartItems'));
    }
}