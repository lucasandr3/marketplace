<?php

namespace App\Providers;

use App\Events\UserCancelledOrder;
use App\Events\UserOrderedItems;
use App\Listeners\UpdateAddingBackItemsInStock;
use App\Listeners\UpdateRemovingItemsInStock;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Observers\Category\CategoryObserver;
use App\Observers\Product\ProductObserver;
use App\Observers\Store\StoreObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserOrderedItems::class => [
            UpdateRemovingItemsInStock::class
        ],
        UserCancelledOrder::class => [
            UpdateAddingBackItemsInStock::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        Store::observe(StoreObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
