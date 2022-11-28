<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->word(),
            'kode' => $this->faker->unique()->randomNumber(5, true),
            'image' => $this->faker->word(1).'.jpg',
            'description' => $this->faker->paragraph(1),
            'brand_id' =>1, 
            'category_id' =>2,
            'stok' => $this->faker->randomNumber(3, true),
            'price' => $this->faker->randomNumber(5, true),
            'discon' => $this->faker->randomNumber(1, true)
        ];
    }
}
