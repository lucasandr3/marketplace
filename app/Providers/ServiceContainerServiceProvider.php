<?php

namespace App\Providers;

use App\Http\Interfaces\Services\QuantitiesRegisterServiceInterface;
use App\Http\Interfaces\Services\ReportServiceInterface;
use App\Http\Interfaces\Services\UploadFilesServiceInterface;
use App\Http\Services\QuantitiesRegisterService;
use App\Http\Services\ReportService;
use App\Http\Services\UploadFilesMultipleService;
use Illuminate\Support\ServiceProvider;

class ServiceContainerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UploadFilesServiceInterface::class, UploadFilesMultipleService::class);
        $this->app->bind(QuantitiesRegisterServiceInterface::class, QuantitiesRegisterService::class);
        $this->app->bind(ReportServiceInterface::class, ReportService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
