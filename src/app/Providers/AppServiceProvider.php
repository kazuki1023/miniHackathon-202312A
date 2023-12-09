<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LineNotificationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LineNotificationService::class, function ($app) {
            return new LineNotificationService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
