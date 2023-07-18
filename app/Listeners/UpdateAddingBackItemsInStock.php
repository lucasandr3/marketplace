<?php

namespace App\Listeners;

use App\Events\UserCancelledOrder;
use App\Http\Services\ProductStockManager;
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
        (new ProductStockManager($event->userOrder))->addingProductInStock();
    }
}
