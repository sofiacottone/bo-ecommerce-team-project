<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newProduct = new Product();
            $newProduct->name = $faker->name();
            $newProduct->brand = $faker->company();
            $newProduct->price = $faker->randomFloat(2, 100, 1000);
            $newProduct->category = $faker->word();
            $newProduct->sale_date = $faker->date();
            $newProduct->description = $faker->text();
            $newProduct->save();
        }
    }
}
