<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    public const VIEWS = [
        'store.welcome',
        'store.product',
        'store.category',
        'store.department',
        'store.division',
        'store.store',
        'store.cart',
        'store.checkout',
        'store.quotation',
        'store.checkout_quotation',
        'store.thanks_quotation',
        'store.orders',
        'store.thanks'
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer(self::VIEWS, function (View $view) {
            $view->with('categories', Category::query()->limit(10)->get(['id','name_category', 'slug']));
        });
    }
}
