<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    //one to many relationship with saveMany()method
    	//create 2 records of categories
        //factory(App\Category::class, 5)->create();
        factory(App\Category::class, 2)->create()->each(function($category){
         //seed the relationship with 3 subcategories
        	$subcategories=factory(App\Subcategory::class, 3)->make();
        	$category->subcategories()->saveMany($subcategories);
        });
    }
}
