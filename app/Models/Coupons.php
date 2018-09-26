<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $table = 'coupons';

    public function category(){
        return $this->belongsToMany('App\Models\Categories','coupon_categories',
            'coupon_id','category_id');
    }

    public function product(){
        return $this->belongsToMany('App\Models\Products','coupon_products',
            'coupon_id','product_id');
    }
}
