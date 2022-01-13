<?php
namespace Epigra\TrGeoZones\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityDistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Epigra\TrGeoZones\Models\CityDistrict::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ilce'=>$this->faker->city,
            'semt'=>$this->faker->city,
            'mahalle'=>$this->faker->city,
            'posta_kodu'=>$this->faker->randomNumber(5)
        ];
    }
}

