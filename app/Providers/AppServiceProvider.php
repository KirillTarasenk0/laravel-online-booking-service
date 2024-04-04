<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\NewsSender;
use App\Observers\NewsSenderObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        NewsSender::observe(NewsSenderObserver::class);
    }
}
