<?php

namespace App\Listeners;

use App\Events\ThreadCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckForSpam
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
     * @param  object  $event
     * @return void
     */
    public function handle(ThreadCreated $event)
    {
        var_dump($event->thread['name']. ' was checked for spam');
    }
}
