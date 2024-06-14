<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i < 10; $i++) {
            DB::table('bills')->insert([
                'customer_id' => 1,
                'total_amount' => $faker->randomElement([100000, 200000, 50000]),
                'status' => 'Đã thanh toán',
                'created_at' => now()
            ]);
        }
    }
}
