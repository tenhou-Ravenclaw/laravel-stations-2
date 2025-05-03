<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'image_url' => $this->faker->imageUrl(640, 480, 'movies'),
            'published_year' => $this->faker->year(),
            'is_showing' => false,
            'description' => $this->faker->paragraph(3),
        ];
    }
}
