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
        try {
            // Share school profile to all views
            if (\Illuminate\Support\Facades\Schema::hasTable('school_profiles')) {
                $schoolProfile = \App\Models\SchoolProfile::firstOrCreate([], []);
                \Illuminate\Support\Facades\View::share('schoolProfile', $schoolProfile); // note: variable name camelCase
            }
        } catch (\Exception $e) {
            // Ignored ensuring migrations don't break
        }
    }
}
