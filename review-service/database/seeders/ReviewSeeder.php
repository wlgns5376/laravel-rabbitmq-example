<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'product_id' => 1,
                'name' => 'Tom',
                'description' => 'This is great!',
            ],
            [
                'product_id' => 2,
                'name' => 'Anna',
                'description' => 'This is not bad.',
            ],
            [
                'product_id' => 3,
                'name' => 'John',
                'description' => 'This is very good.'
            ],
        ]);
    }
}
