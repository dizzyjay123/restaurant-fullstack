<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Atlanta Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slides of American Cheese, Two Slices, Mayonaise and Ketchp Wrapped i Fresh Iceberg whole-Leaf Lettuce',
            'img_url' => '/img/salad-bowl-png-1.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slides of American Cheese, Two Slices, Mayonaise and Ketchp Wrapped i Fresh Iceberg whole-Leaf Lettuce',
            'img_url' => '/img/salad-bowl-png-1.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Emmanuels Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slides of American Cheese, Two Slices, Mayonaise and Ketchp Wrapped i Fresh Iceberg whole-Leaf Lettuce',
            'img_url' => '/img/salad-bowl-png-1.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
