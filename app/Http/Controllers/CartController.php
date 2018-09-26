<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Models\Cart;
use App\Models\Coupons;
use App\Models\Products;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{



    public function cart ()
    {
        $session = Session::get('cart');
        $shipping = Shipping::first();
        if ($session != null) {
            $products = Products::whereIn('id', $session)->get();
            $coupon = Coupons::where('status',true)->get();
            $sale = Sales::sales($products,$coupon);
            $carts = $this->add($session, $sale);

           // dd($carts);
        }
        else {
            return view('cart.cart')->with('carts', null);
        }
        return view('cart.cart')->with('carts', $carts)->with('shipping',$shipping);
    }


    public function cartAddGet ($id)
    {
        Session::push('cart', $id);
    }

    public function cartRemoveGet ($id)
    {
        $session = Session::get('cart');
        Session::pull('cart', $id);
        if ($session != null) {
            foreach ($session as $item) {
                if ($item != $id) {
                    Session::push('cart', $item);
                }
            }
        } else {
            echo 'Items Not Found';
        }
    }

    public function cartUpdateGet($id,$quantity)
    {
        $session = Session::get('cart');
        Session::pull('cart',$id);
        if ($session != null) {
            foreach ($session as $item) {
                if ($item != $id) {
                    Session::push('cart', $item);
                }
            }
            if($quantity != null) {
                for ($i = 0; $i < $quantity; $i++) {
                    Session::push('cart', $id);
                }
            }
        } else {
            echo 'Items Not Found';
        }
    }


    public function cartCheckOutPost ($cart)
    {
        foreach ($cart as $item) {
            $cartItems = new Cart();
            $cartItems->quantity = $item['quantity'];
            $cartItems->productId = $item['id'];
            $cartItems->save();
        }
    }

    public function add ($session, $products)
    {
        $cartItem = [];
        $index = 0;
        foreach ($products as $product) {
            $cartItem[$index] = ['id' => $product['id'], 'item' => $product, 'quantity' => 0];
            $index++;
        }
        foreach ($session as $item) {
            $index = 0;
            foreach ($cartItem as $cart) {
                if ($item == $cart['id']) {
                    $cartItem[$index]['quantity']++;
                }
                $index++;
            }
        }
        return $cartItem;
    }

    public function addCartWithQtyGet($id,$quantity){

        if ($quantity != null) {
            for ($i = 0; $i < $quantity; $i++) {
                Session::push('cart', $id);
            }
        }
    }
}
