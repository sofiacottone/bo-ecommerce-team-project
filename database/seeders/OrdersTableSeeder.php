<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newOrder = new Order();
            $newOrder->date = $faker->date();
            $newOrder->final_price = $faker->randomFloat(2, 100, 1000);
            $newOrder->status = $faker->randomElement(['sent', 'received', 'in transit', 'deleted']);
            $newOrder->save();
        }
    }
}
