<?php

namespace App\Listeners;

use App\Events\UserCancelledOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateAddingBackItemsInStock
{
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
    public function handle(UserCancelledOrder $event): void
    {
        //
    }
}
