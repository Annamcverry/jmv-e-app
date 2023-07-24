<?php

namespace Database\Factories;

use App\Models\Contractor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContractorFactory extends Factory
{
    protected $model = Contractor::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name(),
            'email_address'=>$this->faker->email(),
            'contact_no'=>$this->faker->phoneNumber(),
        ];
    }
}
