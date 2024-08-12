<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)), // Judul postingan
            'slug' => $this->faker->slug(), // Slug dari judul
            'author' => $this->faker->name(), // Excerpt
            'body' => $this->faker->paragraph(mt_rand(6,10)) // Body
        ];
    }
}
