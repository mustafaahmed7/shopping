<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Models\Coupons;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productByIdGet ($id)
    {
        $products = Products::where('id', $id)->get();
        $coupon = Coupons::where('status',true)->get();
        $sale = Sales::sales($products,$coupon);
        return view('product.product')->with('products', $sale);
    }
}
