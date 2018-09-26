<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'roleId',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles ()
    {
        return $this->belongsTo('App\Models\Roles', 'roleId', 'id');
    }

    public function wish_list(){

        return $this->hasMany('App\Models\Products','wish_list',
            'userId','productId');
    }
}
