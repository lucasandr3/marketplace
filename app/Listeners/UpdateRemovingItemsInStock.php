<?php

namespace App\Listeners;

use App\Events\UserOrderedItems;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateRemovingItemsInStock
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
    public function handle(UserOrderedItems $event): void
    {
        //
    }
}
