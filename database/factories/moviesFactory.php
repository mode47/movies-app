<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class moviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $imagePath='C:\Users\hp\movies-app\storage\app/public';

        return [

            'title' => $this->faker->sentence(),
            'rating' => $this->faker->randomFloat(2, 1, 10),
            'genres' => $this->faker->words(3, true),
            'releaseDate' => $this->faker->date(),
            'imageUrl' => $this->faker->imageUrl()
            
        ];
    }
}