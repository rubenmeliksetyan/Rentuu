<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

final class TagFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->unique()->word,
        ];
    }
}
