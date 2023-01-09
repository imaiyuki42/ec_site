<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'product_id' => '1',
                'name' => 'ジーンズ',
                'price' => '4000',
                'image' => 'jeans_1.jpg',
                'color' => 'ブラック',
                'size' => 'M',
                'quantity' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),                
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'product_id' => '3',
                'name' => 'パーカー',
                'price' => '3000',
                'image' => 'parker_1.jpg',
                'color' => 'ホワイト',
                'size' => 'L',
                'quantity' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            ]);
    }
}
