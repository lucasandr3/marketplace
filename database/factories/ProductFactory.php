<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'body' => fake()->paragraph(5, true),
            'price' => fake()->randomFloat(2, 1, 10),
            'slug' => fake()->slug(),
            'in_stock' => fake()->randomDigitNotZero(),
            'sale' => fake()->boolean(),
            'bestseller' => fake()->boolean(),
            'new' => fake()->boolean()
        ];
    }
}
