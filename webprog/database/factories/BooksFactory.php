<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'title' => fake()->title(),
            'author'=> fake()->name(),
            'year'=> fake()->randomNumber(4,true),
            'synopsis'=> fake()->paragraph(),
            'image'=> fake()->imageUrl(),
        ];
    }
}
