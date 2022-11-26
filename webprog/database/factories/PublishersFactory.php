<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publishers>
 */
class PublishersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => fake()->name(mt_rand(2,3)),
                'address' => fake()->address(),
                'phone' => fake()->randomDigit(),
                'email' => fake()->unique()->safeEmail(),
                'image' => fake()->imageUrl($width=400, $height=400),
        ];
    }
}
