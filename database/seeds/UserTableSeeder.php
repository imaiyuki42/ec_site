<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => '山田一郎',
                'email' => 'aaa@gmail.com',
                'password' => Hash::make('111111'),
                'postcode' => '1234567',
                'address' => '東京都新宿区1-1-1',
                'b_year' => '1990',
                'b_month' => '1',
                'b_day' => '1',
                'gender' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],               
            [
                'id' => '2',
                'name' => '前田栞奈',
                'email' => 'maekan@gmail.com',
                'password' => Hash::make('maemae'),
                'postcode' => '1231234',
                'address' => '東京都渋谷区1-1-1',
                'b_year' => '1994',
                'b_month' => '11',
                'b_day' => '2',
                'gender' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
