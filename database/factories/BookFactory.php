<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Facade;

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
            'id_book' => fake()->randomNumber(5),
            'book_name' => fake()->name,
            'book_author_name' => fake()->name,
            'book_price' => fake()->randomFloat(2, 0, 100),
            'book_stock' => fake()->randomNumber(3),
            'book_status' => fake()->boolean
        ];
    }
}
