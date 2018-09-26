<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippingController extends Controller
{
    public function shipping(){

        $shipping = Shipping::all();

        return view('admin.shipping.shipping')->with('shipping',$shipping);
    }

    public function addShippingGet(){

        return view('admin.shipping.add');
    }

    public  function addShippingPost(Request $request){

        $shipping = new Shipping();
        $shipping->name = $request->get('Name');
        $shipping->price = $request->get('Price');
        $shipping->save();

        return redirect('admin/shipping/add');
    }

    public function updateShippingGet($id){
        $shipping = Shipping::where('id',$id)->first();
        return view('admin.shipping.update')->with('shipping',$shipping);
    }

    public  function updateShippingPost(Request $request){
        $id = $request->get('id');
        $name = $request->get('Name');
        $price = $request->get('Price');
        Shipping::where('id',$id)->update(['name'=>$name,'price'=>$price]);
        return redirect('admin/shipping');
    }
}
