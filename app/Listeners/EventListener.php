<?php

namespace App\Listeners;

use App\Events\Event;
use App\Events\SendOrderMail;
use App\Mail\OrderShippedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle(SendOrderMail $event)
    {
        $mail =$event->orders->eMail;

        Mail::to($mail)->send(new OrderShippedMail($event->orders));
    }
}
