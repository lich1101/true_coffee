<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $billId = DB::table('bills')->pluck('id')->toArray();
        $productId = DB::table('products')->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            DB::table('bill_details')->insert([
                'bill_id' => $faker->randomElement($billId),
                'product_id' => $faker->randomElement($productId),
                'quantity' => $faker->numberBetween(1, 10),
                'price' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
