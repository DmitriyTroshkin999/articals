<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'theme' => $this->faker->paragraph(1),
            'artmessage' => $this->faker->paragraph(10),
            'img' => '/img/tree.jpg',
            'views' => 0,
            'likes' => 0,
            'slug' => $this->faker->slug,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
