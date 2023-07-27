<?php

namespace App\Providers;

use App\Http\Interfaces\UploadFilesServiceInterface;
use App\Http\Services\UploadFilesMultipleService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UploadFilesServiceInterface::class, UploadFilesMultipleService::class);

        Model::preventLazyLoading(!app()->isProduction());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
