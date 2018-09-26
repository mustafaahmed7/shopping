<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Models\Cart;
use App\Models\Coupons;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BestSellerController extends Controller
{
    public static function bestseller(){

        $cart = DB::table('cart')
            ->select('cart.productId')
            ->selectRaw('count(cart.quantity) as bestseller')
            ->from('cart')
            ->groupBy('cart.productId')
            ->having('bestseller', '>', 1)
            ->limit(10)->get();
        $id = null;
        $index = 0;
        foreach ($cart as $bestseller){
            $id[$index] = $bestseller->productId;
            $index++;
        }
       $best_seller_products = Products::whereIn('id',$id)->get();
       $coupon = Coupons::where('status',true)->get();
       $sale = Sales::sales($best_seller_products,$coupon);
       return $sale;
    }
}
