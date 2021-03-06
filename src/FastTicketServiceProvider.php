<?php

namespace Immeyti\FastTicket;

use Illuminate\Support\ServiceProvider;

class FastTicketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
