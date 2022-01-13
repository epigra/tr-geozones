<?php
namespace Epigra\TrGeoZones\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Epigra\TrGeoZones\Models\Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'iso_code'=>$this->faker->unique()->numberBetween(1,1000),
            'name'=>$this->faker->name
        ];
    }
}

