<?php namespace Epigra\TrGeoZones\Providers;

use Illuminate\Support\ServiceProvider;

class TrGeoZonesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Boot the application events.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->commands('command.epigra.trgeozones.migrate');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{		

		$this->app->singleton('command.epigra.trgeozones.migrate', function ($app) {
		    return new \Epigra\TrGeoZones\Console\MigrationCommand();
		});
		
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('command.epigra.trgeozones.migrate');
	}

}
