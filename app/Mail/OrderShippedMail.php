<?php

namespace App\Mail;

use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShippedMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $orders;
    protected $cart;

    public function __construct(Orders $orders,$cart)
    {
        $this->orders = $orders;
        $this->cart = $cart;
    }

    public function build()
    {
        return $this->from('test@shopping.com')
            ->subject('BigShop Order Shipped')
            ->view('admin.mail.order')
            ->with([
            'order' => $this->orders,
            'cart'=>$this->cart
            ]);
    }
}
