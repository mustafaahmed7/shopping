<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Products;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MiniCartController extends Controller
{
    public static function miniCart ()
    {
        $cart = new CartController();
        $session = Session::get('cart');
        $mini_cart = null;
        if ($session != null) {
            $products = Products::whereIn('id', $session)->get();
            $coupon = Coupons::where('status',true)->get();
            $sale = Sales::sales($products,$coupon);
            if($sale !=null){
                foreach ($sale as $item) {
                    $item->price = $item->price - $item->sale;
                }
            }
            $mini_cart = $cart->add($session, $sale);
        }
        $products_all = null;
        $total_price = null;
        if ($mini_cart != null) {
            foreach ($mini_cart as $item) {
                $products_all += $item['quantity'];
                $total_price += $item['item']->price * $item['quantity'];
            }
        }
        $shipping = Shipping::first();
        return [
            'mini_cart'=>$mini_cart,
            'products_all'=> $products_all,
            'total_price'=> $total_price,
            'shipping'=>$shipping
        ];
        }
}
