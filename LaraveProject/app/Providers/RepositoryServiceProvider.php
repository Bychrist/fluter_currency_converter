<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ServiceImplementation;
use App\Repository\IServiceImplementation;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IServiceImplementation::class, ServiceImplementation::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
