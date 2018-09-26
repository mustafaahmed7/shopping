<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function wishlist(){


        return view('wishlist.wishlist');
    }
}
