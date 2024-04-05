<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'company' => fake()->company(),
            'location' => fake()->sentence(),
            'email' => fake()->companyEmail(),
            'tags' => 'windows ,mac',
            'website' => fake()->url(),
            'description' => fake()->paragraph(3),
            'listAll' => 'listAll',
        ];
    }
}
