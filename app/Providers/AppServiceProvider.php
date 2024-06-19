<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CartController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind('CartController', function ($app) {
            return new CartController();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


    }
}
