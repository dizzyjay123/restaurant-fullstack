<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore dignissimos recusandae!',
            'image_url' => '/img/chips.png',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore dignissimos recusandae!',
            'image_url' => '/img/hamburger-and-fries-png-4.png',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore dignissimos recusandae!',
            'image_url' => '/img/342-3422633_pork-entrees-steak-pork-png.png',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'slides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore dignissimos recusandae!',
            'image_url' => '/img/salad-bowl-png-1.png',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore dignissimos recusandae!',
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image.png',
            'updated_at'=> Carbon::now(),
            'created_at'=> Carbon::now()
        ]);
    }
}
