<?php

namespace App\Classes;

class Sales
{
    public static function sales($products,$coupons){

        if ($coupons != null) {
            //coupons category
            $coupons_categories = null;
            $coupon = null;
            $index = 0;

            foreach ($coupons as $categories) {
                foreach ($categories->category as $category) {
                    $coupons_categories[$index] = $category->id;
                    $index++;
                }
                $coupon = $categories;
            }
            //coupons products
            $coupons_products = null;
            $index = 0;
            foreach ($coupons as $_products) {
                foreach ($_products->product as $product) {
                    $coupons_products[$index] = $product->id;
                    $index++;
                }
            }
            //products
            $index = 0;
            foreach ($products as $product) {
                $category_id = $product->categories->id;
                $product_id = $product->id;
                $date = date('Y-m-d');
                if ($coupon->data_start <= $date && $coupon->date_end >= $date) {
                    $_collection_category = null;
                    $_collection_product = null;
                    if ($coupons_categories != null)
                        $_collection_category = in_array($category_id, $coupons_categories, true);
                    if ($coupons_products != null)
                        $_collection_product = in_array($product_id, $coupons_products, true);

                    if ($_collection_product == true || $_collection_category == true) {
                        $discount = $product->price * ($coupon->discount / 100);
                        $product->sale = $discount;
                        $product->discount = $coupon->discount;
                        $index++;
                    }
                }
            }
        }
        return $products;
    }
}