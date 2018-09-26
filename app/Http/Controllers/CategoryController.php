<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function categoryGet($title = null){
        if($title != null) {
            $category = Categories::where('categoryUrl', $title)->get();
            $id = $category[0]->id;
            $products = Products::where('categoryId',$id)->get();
            $coupon = Coupons::where('status',true)->get();
            $sales = Sales::sales($products,$coupon);
        }
        else {
            $products = Products::all();
            $coupon = Coupons::where('status',true)->get();
            $sales = Sales::sales($products,$coupon);
        }

       return view('category.category')->with('products',$sales);
   }

   public static function categories(){
       $categories = Categories::where('categoryId','0')->get();
       return $categories;
   }
}
