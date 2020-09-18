<?php

namespace Nomada\Calculator;

use Illuminate\Support\ServiceProvider;
// use TestCommand;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Nomada\Calculator\CalculatorController');
        $this->app->make('Nomada\Calculator\TestCommand');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Nomada\Calculator\TestCommand::class
            ]);
        }
    }
}
