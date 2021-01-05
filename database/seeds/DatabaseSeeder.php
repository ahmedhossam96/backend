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
        Eloquent::unguard();
         $this->call(UserSeeder::class);
         $this->call(ShopSeeder::class);
       // $this->call(CategorySeeder::class);
      // $this->call(ClientSeeder::class);
      // $this->call(OrderSeeder::class);
       // $this->call(PostsTableSeeder::class);
       // $this->call(FavoritesTableSeeder::class);
       
    }
}
