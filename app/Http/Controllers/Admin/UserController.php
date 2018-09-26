<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $users;
    public function user(){

        $this->users = User::all();
        return view('admin.user.user')->with('users',$this->users);
    }

    public function userUpdateGet($id){

        $user = User::where('id',$id)->first();
        return view('admin.user.update')->with('user',$user);
    }
}
