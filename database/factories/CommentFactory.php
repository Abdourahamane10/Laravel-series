<?php

namespace Database\Factories;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'serie_id' => Serie::inRandomOrder()->first()->id,
            'content' => $this->faker->sentence, //realTextBetween($min = 500, $max = 1000),
            'date' => $this->faker->dateTime,
        ];
    }
}
