<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Restaurants & Cafe\'s',
            'icon' => '/storage/categories/restaurant.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Grocery',
            'icon' => '/storage/categories/grocery.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Hardware',
            'icon' => '/storage/categories/hardware.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Home & Living',
            'icon' => '/storage/categories/home.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Water & Beverages',
            'icon' => '/storage/categories/water.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Electronics',
            'icon' => '/storage/categories/electronics.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Health & Beauty',
            'icon' => '/storage/categories/health.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Misc',
            'icon' => '/storage/categories/other.svg'        
        ]);
    }
}
