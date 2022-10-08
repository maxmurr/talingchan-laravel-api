<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\InvoiceDetail;
use App\Models\Invoice;
use App\Models\Lot;
use App\Models\Unit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class InvoiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $qty = $this->faker->numberBetween(1, 10000);
        $price = $this->faker->numberBetween(1, 100000);


        return [
            'invoices_id' => Invoice::class->factory(),
            'lots_id' => Lot::class->factory(),
            'qty' => $qty,
            'price' => $price,
            'units_id' => Unit::class->factory()
        ];
    }
}
