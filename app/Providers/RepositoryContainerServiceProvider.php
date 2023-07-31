<?php

namespace App\Providers;

use App\Http\Interfaces\Repositories\ReportRepositoryInterface;
use App\Http\Repositories\ReportRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryContainerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ReportRepositoryInterface::class, ReportRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
