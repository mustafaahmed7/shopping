<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function orders ()
    {
        $orders = Orders::all();

        return view('admin.orders.order')->with('orders', $orders);
    }

    public function detail ($id)
    {
        $orders = Orders::where('id', $id)->first();
        $order_cart = null;
        $index = 0;
        $tmp = null;
        $total = null;
        foreach ($orders->cart as $item) {
            foreach ($item->products as $product) {
                $order = new Orders();
                $order->product_id= $product->id;
                $order->product_title= $product->title;
                $order->quantity = $item->quantity;
                $order->unit_price = $item->unit_price;
                $order->unit_total_price =  $item->Total;
                $order_cart[$index] = $order;
                $index++;
                $tmp += $item->Total;
                $total['sub_total']= $tmp;

            }
        }
        $total['total'] =  $total['sub_total'] + $orders->Shipping;
        return view('admin.orders.detail')->with('order', $orders)
            ->with('order_cart',$order_cart)
            ->with('total',$total);
    }
    public function deleteOrderGet($id){
        $order = Orders::findOrFail($id);
        $order->delete();
        return redirect('/admin/order');
    }
}
