<?php

namespace Database\Factories;

use \App\Models\User;
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
            'author_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->realTextBetween($min = 8, $max = 20),
            'content' => $this->faker->realTextBetween($min = 500, $max = 1000),
            'acteurs' => $this->faker->name,
            'url' => $this->faker->url,
            'tags' => $this->faker->words(5, true),
            'date' => $this->faker->dateTime,
            'status' => $this->faker->sentence,
        ];
    }
}
