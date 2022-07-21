<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'categorie_id' => rand(1,3),
            'content' => $this->faker->paragraphs($nb=10,$asText = true),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'postBy' => rand(7,10) , // veuillez à ce que 7 à 10 soit éditeur(c'est pas la meilleure façon)
            //'nb_like' => rand(0,20)
        ];
    }
}
