<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App/Models/Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $faker = \Faker\Factory::create();


            Customer::create([
                'CName' => "Maxthomas Murray",
                'CTel' => "0646504306"
            ]);
    }
}
