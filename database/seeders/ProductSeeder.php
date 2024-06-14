<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Espresso',
                'category' => 'Cà phê',
                'price' => 50000,
                'description' => 'Một dạng cà phê đậm đà và cô đặc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Latte',
                'category' => 'Cà phê',
                'price' => 50000,
                'description' => 'Espresso với sữa hấp và một ít bọt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cappuccino',
                'category' => 'Cà phê',
                'price' => 50000,
                'description' => 'Espresso với bọt sữa hấp.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Americano',
                'category' => 'Cà phê',
                'price' => 50000,
                'description' => 'Espresso với nước nóng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mocha',
                'category' => 'Cà phê',
                'price' => 50000,
                'description' => 'Espresso với sô cô la, sữa hấp và kem tươi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
