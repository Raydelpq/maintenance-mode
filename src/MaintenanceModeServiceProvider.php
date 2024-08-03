<?php

namespace Raydelpq\MaintenanceMode;

use Illuminate\Support\ServiceProvider;

class MaintenanceModeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->app['router']->aliasMiddleware('maintenance', \RaydelPiloto\MaintenanceMode\Http\Middleware\PreventRequestsDuringMaintenance::class);
    }

    public function register()
    {
        //
    }
}
