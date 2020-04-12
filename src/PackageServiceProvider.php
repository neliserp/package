<?php

namespace Neliserp\Package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadFactoriesFrom(__DIR__ . '/../database/factories');
    }

    public function register()
    {
        //
    }
}
