<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductsSeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            CategorySeeder::class,
            CartsSeeder::class,
            FavoritesTableSeeder::class,
            UserTableSeeder::class,
            DeliveryAddressTableSeeder::class,
            PaymentsTableSeeder::class,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
