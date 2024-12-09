<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $id = 1; // Initialize an ID counter for sequential parent IDs

        return [
            'name' => $this->faker->word,
            'parent_id' => $id > 1 ? $this->faker->optional(0.5, null)->numberBetween(1, $id - 1) : null, // Sequential parent assignment

        ];
    }
}
