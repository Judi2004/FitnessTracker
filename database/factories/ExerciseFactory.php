<?php

namespace Database\Factories;

// database/factories/ExerciseFactory.php
use App\Models\Exercise;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        return [
            'category_id' => Category::factory(), // Automatically create a category
            'name' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url(),
            'description' => $this->faker->sentence,
        ];
    }
}
