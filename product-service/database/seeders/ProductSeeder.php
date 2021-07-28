<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Americano',
                'price' => 3.00,
            ],
            [
                'id' => 2,
                'name' => 'Cafe Latte',
                'price' => 3.50,
            ],
            [
                'id' => 3,
                'name' => 'cappuccino',
                'price' => 3.50,
            ],
        ]);
    }
}
