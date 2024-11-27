<?php

namespace TomatoPHP\FilamentSupport;

use Illuminate\Support\ServiceProvider;


class FilamentSupportServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentSupport\Console\FilamentSupportInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-support.php', 'filament-support');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-support.php' => config_path('filament-support.php'),
        ], 'filament-support-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-support-migrations');


        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-support');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-support'),
        ], 'filament-support-lang');
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
