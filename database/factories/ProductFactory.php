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
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/seed/'.fake()->uuid.'/300/200',
            'name' => fake()->words(3,true),
            'description' => fake()->paragraph,
            'year' => fake()->randomElement(['available', 'not available']),
            'list_number' => fake()->number,
        ];
    }
}
