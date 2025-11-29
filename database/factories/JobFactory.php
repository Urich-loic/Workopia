<?php

namespace Database\Factories;

use App\Models\User;
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

        return [ // Create new user for each listing
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraphs(3, true),
            'salary' => $this->faker->numberBetween(40000, 120000),
            'tags' => implode(', ', $this->faker->words(3)),
            'job_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Internship', 'Contract', 'Temporary', 'Volunteer']),
            'remote' => $this->faker->boolean,
            'requirements' => $this->faker->sentences(3, true),
            'benefits' => $this->faker->sentences(2, true),
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'email' => $this->faker->safeEmail,
            'company_name' => $this->faker->company,
            'company_description' => $this->faker->sentences(2, true),
            'company_logo' => $this->faker->imageUrl(100, 100, 'business', true, 'logo'),
            'company_website' => $this->faker->url,
        ];
    }
}
