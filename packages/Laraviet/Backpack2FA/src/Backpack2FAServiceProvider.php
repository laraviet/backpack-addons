<?php

namespace Laraviet\Backpack2FA;

use Illuminate\Support\ServiceProvider;

class Backpack2FAServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laraviet');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laraviet');
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
        $this->mergeConfigFrom(__DIR__.'/../config/backpack2fa.php', 'backpack2fa');

        // Register the service the package provides.
        $this->app->singleton('backpack2fa', function ($app) {
            return new Backpack2FA;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['backpack2fa'];
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
            __DIR__.'/../config/backpack2fa.php' => config_path('backpack2fa.php'),
        ], 'backpack2fa.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laraviet'),
        ], 'backpack2fa.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/laraviet'),
        ], 'backpack2fa.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/laraviet'),
        ], 'backpack2fa.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
