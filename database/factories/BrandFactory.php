<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
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
            'image' => $this->faker->word(1).'.jpg',
           
            'slug' => $this->faker->unique()->word(1)
            
        ];
    }
}
