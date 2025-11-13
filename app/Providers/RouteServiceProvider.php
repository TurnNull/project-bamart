<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap route bindings and groupings.
     */
    public function boot(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/user.php'));
        // Route::middleware('web')
        //     ->group(base_path('routes/admin.php'));
    }
}
