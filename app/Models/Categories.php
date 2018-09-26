<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';

    public function products(){

        return $this->hasMany('app/models/product');
    }

    public  function subCategory(){

        return $this->hasMany('App\Models\Categories','categoryId');
    }
}
