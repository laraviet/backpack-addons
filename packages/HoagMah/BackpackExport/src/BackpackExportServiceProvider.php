<?php

namespace HoagMah\BackpackExport;

use Illuminate\Support\ServiceProvider;

class BackpackExportServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hoagmah');
        $this->loadViewsFrom(__DIR__.'/../resources/views/buttons', 'hoagmah.buttons');
        $this->loadViewsFrom(__DIR__.'/../resources/views/pdf', 'hoagmah.pdf');
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
//        $this->mergeConfigFrom(__DIR__.'/../config/backpackexport.php', 'backpackexport');

        // Register the service the package provides.
        $this->app->singleton('backpackexport', function ($app) {
            return new BackpackExport;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['backpackexport'];
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
            __DIR__.'/../resources/views/buttons' => base_path('resources/views/vendor/backpack/crud/buttons'),
        ], 'backpackexport.views');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hoagmah'),
        ], 'backpackexport.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/hoagmah'),
        ], 'backpackexport.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hoagmah'),
        ], 'backpackexport.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
