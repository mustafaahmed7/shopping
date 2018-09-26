<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $table = 'cart';
   
   public function products(){
       
       return $this->hasMany('App\Models\Products','id','productId');
   }
}
