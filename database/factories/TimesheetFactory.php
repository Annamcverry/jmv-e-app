<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timesheet>
 */
class TimesheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'week_beginning' => $this->faker->date(),
            'mon_hours'=>$this->faker->number_format,
            'tue_hours'=>$this->faker->number_format,
            'wed_hours'=>$this->faker->number_format,
            'thurs_hours'=>$this->faker->number_format,
            'fr_hours'=>$this->faker->number_format,
            'sat_hours'=>$this->faker->number_format,
            'sun_hours'=>$this->faker->number_format,
            
    
        ];
    }
}
