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
        'store.store',
        'store.cart'
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
            $view->with('categories', Category::all(['name', 'slug']));
        });
    }
}
