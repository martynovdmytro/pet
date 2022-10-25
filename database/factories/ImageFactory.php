<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => "/img/beautiful_granite_lake_landscape_mountain_nature_600429.jpg",
            'year' => $this->faker->year,
            'created_at' => $this->faker->date()
        ];
    }
}
