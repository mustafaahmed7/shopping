<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'Products';

    public function categories(){

        return $this->hasOne('App\Models\Categories','id','categoryId');
    }

    public function images(){

        return $this->hasMany('App\Models\Images','productId','id');
    }
}
