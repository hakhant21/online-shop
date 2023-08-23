<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'category_id' => rand(1, 10),
            'name' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'description' => fake()->paragraph(),
            'image' => 'https://placehold.co/400x300',
            'price' => rand(9999, 99999),
        ];
    }
}
