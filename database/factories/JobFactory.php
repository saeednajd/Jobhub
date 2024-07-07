<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['50,000 تومان', '70,000 تومان', '20,000 تومان', '90,000 تومان',]),
            'location' => 'Iran Tehran',
            'schedule' => fake()->randomElement(["remote", "Full time", "intern"]),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
