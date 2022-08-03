<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

final class AggregateFactory extends Factory
{
    public function definition()
    {
        return [
            'views' => fake()->numberBetween(1, 5000),
            'likes' => fake()->numberBetween(1, 5000),
        ];
    }
}
