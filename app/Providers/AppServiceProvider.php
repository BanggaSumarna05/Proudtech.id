<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \App\Models\Project::observe(\App\Observers\ProjectObserver::class);
        \App\Models\Service::observe(\App\Observers\ServiceObserver::class);
        \App\Models\Testimonial::observe(\App\Observers\TestimonialObserver::class);
        \App\Models\Setting::observe(\App\Observers\SettingObserver::class);
    }
}
