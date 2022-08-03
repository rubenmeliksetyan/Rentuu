<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

final class ArticleFactory extends Factory
{

    public function definition()
    {
        return [
            'slug' => fake()->unique()->slug,
            'title' => fake()->title,
            'description' => fake()->text,
            'image' => fake()->imageUrl,
        ];
    }
}
