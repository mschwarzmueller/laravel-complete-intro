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
        $category = new \App\Category();
        $category->name = 'Tech';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Sports';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Food';
        $category->save();
    }
}
