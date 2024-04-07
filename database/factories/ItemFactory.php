<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "slug" => $this->faker->slug(),
            "price" => $this->faker->numberBetween(5, 1000),
            "description" => $this->faker->paragraph(),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 10)
        ];
    }
}
