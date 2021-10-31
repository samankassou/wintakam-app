<?php

namespace Database\Factories;

use App\Models\Advert;
use Illuminate\Support\Str;
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
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->text,
            'price_per_month' => $this->faker->numberBetween(20000, 80000),
            'neighborhood_id' => rand(1, 8),
        ];
    }
}
