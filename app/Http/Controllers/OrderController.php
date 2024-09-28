<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function addProductToCart($product_id, $user_id) {}

    static public function addCartItemToCookie($product_id, $user_id)
    {
        $cart = [
            'product_id' => $product_id,
            'user_id' => $user_id
        ];
        Cookie::queue('cart', json_encode($cart), 60 * 24 * 30);
    }

    static public function getCartItems()
    {
        $cart = json_decode(Cookie::get('cart'), true);
        if (!$cart) {
            $cart = [];
        }

        return $cart;
    }
}