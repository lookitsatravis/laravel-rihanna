<?php

namespace Lookitsatravis\Rihanna;

use Illuminate\Support\ServiceProvider;
use Lookitsatravis\Rihanna\Console\Commands\WorkCommand;

class RihannaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                WorkCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
