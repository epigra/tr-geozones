<?php
namespace Epigra\TrGeoZones\Database\Factories;

use Epigra\TrGeoZones\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Epigra\TrGeoZones\Models\City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country = Country::factory()->create();
        return [
            'name'=>$this->faker->name,
            'country_id'=>$country->id
        ];
    }
}

