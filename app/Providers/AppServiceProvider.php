<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Filament\Facades\Filament;

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
                // untuk scroll halaman view data storing FCT
              //  \Filament\Facades\Filament::serving(function () {
                 //       \Filament\Facades\Filament::registerViteTheme('resources/css/filament/admin/theme.css');
              //  });
    }
}
