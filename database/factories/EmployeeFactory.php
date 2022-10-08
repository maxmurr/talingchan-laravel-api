<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $position = $this->faker->randomElement(['salesperson', 'sales head']);
        $tel = $this->faker->phoneNumber();


        return [
            'name' => $name,
            'position' => $position,
            'tel' => $tel
        ];
    }
}
