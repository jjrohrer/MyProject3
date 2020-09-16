<?php

namespace Jjrohrer\MyPackage3;

use Illuminate\Support\ServiceProvider;

class MyPackage3ServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'jjrohrer');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'jjrohrer');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mypackage3.php', 'mypackage3');

        // Register the service the package provides.
        $this->app->singleton('mypackage3', function ($app) {
            return new MyPackage3;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['mypackage3'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/mypackage3.php' => config_path('mypackage3.php'),
        ], 'mypackage3.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/jjrohrer'),
        ], 'mypackage3.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/jjrohrer'),
        ], 'mypackage3.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/jjrohrer'),
        ], 'mypackage3.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
