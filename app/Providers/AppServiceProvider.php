<?php

namespace App\Providers;

// use Filament\Filament;
// use App\Filament\Resources\CrtpostResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register any services
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register resources to the Filament panel
        // Filament::registerResources([
        //     CrtpostResource::class,
        // ]);

        // Set the default string length for databases
        Schema::defaultStringLength(191); 
    }
}
