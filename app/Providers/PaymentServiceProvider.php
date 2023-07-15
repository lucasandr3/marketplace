<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
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
        \PagSeguro\Library::initialize();
        \PagSeguro\Library::cmsVersion()->setName("SuperApp")->setRelease("1.0.0");
        \PagSeguro\Library::moduleVersion()->setName("SuperApp")->setRelease("1.0.0");
    }
}
