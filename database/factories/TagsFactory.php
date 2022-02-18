<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'articles_id' => $this->faker->numberBetween(1,20),
            'text' => $this->faker->text(15),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
