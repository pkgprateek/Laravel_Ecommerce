<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Tempered Glass',
            'price'        =>  1.20,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'product_name' => 'Antique Harappan Locket',
            'price'        => 200.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'product_name' => 'Glass Chimes',
            'price'        => 4.50,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
