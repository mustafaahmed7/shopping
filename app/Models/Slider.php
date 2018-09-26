<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "Slider";

    public function media(){
        return $this->belongsToMany('App\Models\Media','media_slider',
            'sliderId','mediaId');
    }

    public function product(){

        return $this->belongsTo('App\Models\Products','productId','id');
    }
}
