<?php

namespace App\Observers;

use App\Models\NewsSender;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsNotificationGreetingsMail;

class NewsSenderObserver implements ShouldHandleEventsAfterCommit
{
    public function created(NewsSender $newsSender): void
    {
        Mail::to($newsSender->orderBy('id', 'desc')->first())->queue(new NewsNotificationGreetingsMail());
    }
}
