<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(1),
            'slug' => $this->faker->unique()->word(1),
            'image' => $this->faker->unique()->word(1),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
