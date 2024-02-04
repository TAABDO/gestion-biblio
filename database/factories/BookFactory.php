<?php

namespace Database\Factories;
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->name,
            'author'=>fake()->name,
            'genre'=>fake()->title,
            'description'=>fake()->text,
            'publication_year'=>fake()->date(),
            'total_copies'=>fake()->numberBetween(2,30),
            'availbale_copies'=>fake()->numberBetween(2,30),
        ];
    }
}
