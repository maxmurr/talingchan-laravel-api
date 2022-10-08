<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lot;
use App\Models\Unit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeThisDecade();
        $qty = $this->faker->numberBetween(1, 100);


        return [
            'date' => $date,
            'qty' => $qty,
            'units_id' => Unit::factory()
        ];
    }
}
