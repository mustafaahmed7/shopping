<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "Media";

    public function slider(){
        return $this->belongsToMany('App\Models\Slider','media_slider',
            'mediaId','sliderId');
    }
}
