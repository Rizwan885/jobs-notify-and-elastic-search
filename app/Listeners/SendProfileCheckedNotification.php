<?php

namespace App\Listeners;

use App\Events\SomeOneCheckedProfile;
use App\Jobs\SendProfileCheckedMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProfileCheckedNotification
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
     * @param  \App\Events\SomeOneCheckedProfile  $event
     * @return void
     */
    public function handle(SomeOneCheckedProfile $event)
    {

        // SendProfileCheckedMailJob::dispatch($event->user);
        $delay=now()->addSeconds(3);
        SendProfileCheckedMailJob::dispatch($event->user)->delay($delay);
    }
}
