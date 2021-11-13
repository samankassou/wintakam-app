<?php

namespace Database\Factories;

use App\Models\Advert;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'price_per_month' => $this->faker->randomElement([
                20000, 25000, 30000, 35000, 40000, 45000, 50000, 55000, 60000
            ]),
            'neighborhood_id' => rand(1, 8),
            'category_id' => rand(1, 7),
        ];
    }
}
