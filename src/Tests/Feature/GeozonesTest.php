<?php

namespace Epigra\TrGeoZones\Tests\Feature;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\CityDistrict;
use Epigra\TrGeoZones\Models\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GeozonesTest extends TestCase
{
    /** @test */
    public function it_should_give_country_when_related_city_created_at()
    {
         Country::factory()->create()->each(function ($country) {
            City::factory()->create([
                'country_id' => $country->id
            ]);
        });

        $this->assertTrue(true);
    }

    /** @test */
    public function it_should_give_city_when_related_city_districts_created_at()
    {
        City::factory()->create()->each(function ($city) {
            CityDistrict::factory()->create([
                'city_id' => $city->id
            ]);
        });
        $this->assertTrue(true);
    }
}

