<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContractorInvoice>
 */
class ContractorInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contractor_name'=>$this->faker->name(),
            'date'=>$this->faker->date(),
            'amount_paid'=>$this->faker->randomNumber(),
            'employee_count'=>$this->faker->randomDigit(),
        ];
    }
}
