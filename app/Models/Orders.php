<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $events = ['created' => Events\SendOrderMail::class];

    public function cart(){

        return $this->hasMany('App\Models\Cart','orderId','id');
    }
}
