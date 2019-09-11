<?php

namespace Epigra\TrGeoZones\Providers;

use Epigra\TrGeoZones\Nova\City;
use Epigra\TrGeoZones\Nova\CityDistrict;
use Epigra\TrGeoZones\Nova\Country;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Laravel\Nova\Nova;

class TrGeoZonesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    
    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/trgeozones');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'trgeozones');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'trgeozones');
        }
    }

     /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('trgeozones.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'trgeozones'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
