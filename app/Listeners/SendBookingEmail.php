<?php

namespace App\Listeners;

use App\Events\BookingRoomEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Events\ShouldDispatchAfterCommit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingRoomNotificationMail;

class SendBookingEmail implements ShouldQueue, ShouldDispatchAfterCommit
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingRoomEvent $event): void
    {
        Mail::to(Auth::user()->email)->send(new BookingRoomNotificationMail());
    }
}
