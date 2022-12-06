<?php

namespace Stockify;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class StockifyServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/database/migrations");
        $this->registerRoutes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/config/stockify.php", "stockify");

        $this->app->singleton("stockify", function () {
            return new Stockify();
        });
    }

    private function routeConfiguration(): array
    {
        return [
            "prefix" => config("stockify.routing.prefix"),
            "middleware" => config("stockify.routing.middleware"),
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . "/routes/api.php");
        });
    }
}
