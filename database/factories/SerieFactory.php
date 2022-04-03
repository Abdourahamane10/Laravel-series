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
        $listOfActors = "";
        for ($i = 1; $i <= random_int(5, 10); $i++) {
            $listOfActors .= $this->faker->unique()->name() . ',';
        }
        $len = strlen($listOfActors);
        $listOfActors = substr($listOfActors, 0, $len);

        return [
            'author_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->realTextBetween($min = 8, $max = 20),
            'content' => $this->faker->realTextBetween($min = 500, $max = 1000),
            'acteurs' => $listOfActors,
            'url' => $this->faker->url,
            'tags' => $this->faker->randomElement(['Action', 'Humour', 'Policier', 'Comique', 'Amour', 'Drama']),
            'date' => $this->faker->dateTime,
            'status' => $this->faker->randomElement(['En cours', 'Publiée', 'Modifiée']),
            'media' => $this->faker->randomElement(['media1', 'media2', 'media3', 'media4', 'media5', 'media6', 'media7', 'media8', 'media9', 'media10', 'media11', 'media12', 'media13', 'media14', 'media15', 'media16', 'media17', 'media18', 'media19']),
        ];
    }
}
