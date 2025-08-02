<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->mapRoutes();
    }

    /**
     * Define all the routes for the application.
     */
    protected function mapRoutes(): void
    {
        // Web routes
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // API routes
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}
