<?php

namespace Database\Seeders;

use App\Models\Cart;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $productId = DB::table('products')->pluck('id')->toArray();
        for($i = 0; $i < 5; $i++){
            DB::table('carts')->insert([
                'created_at' => now(),
                'updated_at' => now()
            ]);
            for($j = 0; $j < 5; $j++){
                DB::table('cart_items')->insert([
                    'cart_id' => $i + 1,
                    'product_id' => $faker->randomElement($productId),
                    'quantity' => $faker->randomElement([1, 2, 3]),
                    'price' => $faker->randomElement([100000, 200000, 50000]),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
