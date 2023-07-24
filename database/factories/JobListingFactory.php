<?php

namespace Database\Factories;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    protected $model = JobListing::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description'=> $this->faker->sentence(),
            'location'=> $this->faker->word(),
            'licenses'=> $this->faker->word(),
            'hours'=> $this->faker->randomDigit(),
        ];
    }
}
