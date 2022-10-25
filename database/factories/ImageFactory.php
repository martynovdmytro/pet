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
            'link' => "/img/Bios_HMNI_Spraydaily_12.jpeg",
            'year' => $this->faker->year,
            'created_at' => $this->faker->date()
        ];
    }
}
