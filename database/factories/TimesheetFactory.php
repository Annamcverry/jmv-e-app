<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Timesheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timesheet>
 */
class TimesheetFactory extends Factory
{

    protected $model = Timesheet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory(),
            'week_beginning' => $this->faker->dateTime(),
            'mon_hours'=>$this->faker->randomDigit(),
            'tue_hours'=>$this->faker->randomDigit(),
            'wed_hours'=>$this->faker->randomDigit(),
            'thurs_hours'=>$this->faker->randomDigit(),
            'fri_hours'=>$this->faker->randomDigit(),
            'sat_hours'=>$this->faker->randomDigit(),
            'sun_hours'=>$this->faker->randomDigit(),
            
    
        ];
    }
}
