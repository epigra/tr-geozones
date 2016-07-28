<?php namespace Epigra\TrGeoZones\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TrgeozonesDatabaseSeeder extends Seeder {

	protected $truncate=['geozone_countries','geozone_cities','geozone_city_districts'];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		\DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(CountrySeeder::class);
		$this->call(CitySeeder::class);
		$this->call(CityDistrictsSeeder::class);
		
		\DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}