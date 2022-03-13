<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween($min = 8, $max = 20),
            'content' => $this->faker->realTextBetween($min = 500, $max = 1000),
            'acteurs' => $this->faker->name,
            'url' => $this->faker->url,
            'tags' => $this->faker->realText,
            'date' => $this->faker->dateTime,
            'status' => $this->faker->sentence,
        ];
    }
}
