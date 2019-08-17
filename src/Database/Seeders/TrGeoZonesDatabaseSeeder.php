<?php

namespace Epigra\TrGeoZones\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TrGeoZonesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ini_set('memory_limit', '-1');

        $this->call(GeozoneCountriesTableSeeder::class);
        $this->call(GeozoneCitiesTableSeeder::class);
        $this->call(GeozoneCityDistrictsTableSeeder::class);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // $this->call("OthersTableSeeder");
    }
}
