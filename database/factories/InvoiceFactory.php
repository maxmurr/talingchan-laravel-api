<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Employee;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['0','1']); 
        $date = $this->faker->dateTimeThisDecade();


        return [
            'customers_id' => Customer::factory(),
            'employees_id' => Employee::factory(),
            'status' => $status,
            'date' => $date
        ];
    }
}
