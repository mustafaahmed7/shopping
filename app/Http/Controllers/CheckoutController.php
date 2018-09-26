<?php

namespace App\Http\Controllers;

use App\Classes\Sales;
use App\Mail\OrderShippedMail;
use App\Models\Cart;
use App\Models\Coupons;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    private $shipping;

    public function checkout ()
    {
        $session = Session::get('cart');
        $shipping = 0;
        $carts = null;
        if ($session != null) {
            $products = Products::whereIn('id', $session)->get();
            $coupon = Coupons::where('status', true)->get();
            $sale = Sales::sales($products, $coupon);
            $carts = $this->add($session, $sale);
            $shipping = Shipping::first();
        }
        if ($carts == null)
            return redirect('/');
        return view('checkout.checkout')
            ->with('carts', $carts)
            ->with('shipping', $shipping);
    }

    public function checkoutPost (Request $request)
    {

        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Telephone' => 'required',
            'Address1' => 'required',
            'Email' => 'required',
            'City' => 'required',
            'Postcode' => 'required',
        ]);
        $shipping = Shipping::first();
        $session = Session::get('cart');
        $products = Products::whereIn('id', $session)->get();
        $coupon = Coupons::where('status', true)->get();
        $sale = Sales::sales($products, $coupon);

        foreach ($sale as $product) {
            $product->price = $product->price - $product->sale;
        }

        $carts = $this->add($session, $sale);
        $cart = $this->cartSet($carts);
        $orders = new Orders();
        $orders->FirstName = $request->get('FirstName');
        $orders->LastName = $request->get('LastName');
        $orders->Telephone = $request->get('Telephone');
        $orders->Address1 = $request->get('Address1');
        $orders->Address2 = $request->get('Address2');
        $orders->Email = $request->get('Email');
        $orders->Postcode = $request->get('Postcode');
        $orders->Fax = $request->get('Fax');
        $orders->Company = $request->get('Company');
        $orders->City = $request->get('City');
        $orders->Country = $request->get('Country');
        $orders->Region = $request->get('Region');
        $user_id = $request->get('UserId');

        if($user_id != "0")
        $orders->userId = $request->get('UserId');
        else
        $orders->userId = 999;

        $orders->isActive = true;
        $orders->Comments = $request->get('Comments');
        $orders->Shipping = $shipping->price;
        $orders->save();
        $orders->cart()->saveMany($cart);
        Session::pull('cart');

        Mail::to($request->get('Email'))
            ->send(new OrderShippedMail($orders,$cart));

    }

    public function cartSet ($cart)
    {
        $carts = null;
        $index = 0;
        foreach ($cart as $item) {
            $cartItems = new Cart();
            $cartItems->quantity = $item['quantity'];
            $cartItems->productId = $item['id'];
            $cartItems->Total = $item['item']->price * $item['quantity'];
            $cartItems->unit_price = $item['item']->price;
            $carts[$index] = $cartItems;
            $index++;
        }
        return $carts;
    }

    public function add ($session, $products)
    {
        $cartItem = [];
        $index = 0;
        foreach ($products as $product) {
            $cartItem[$index] = ['id' => $product['id'], 'item' => $product, 'quantity' => 0];
            $index++;
        }
        foreach ($session as $item) {
            $index = 0;
            foreach ($cartItem as $cart) {
                if ($item == $cart['id']) {
                    $cartItem[$index]['quantity']++;
                }
                $index++;
            }
        }
        return $cartItem;
    }


    public function thank_you(){

        return view('checkout.thank-you');
    }
}
