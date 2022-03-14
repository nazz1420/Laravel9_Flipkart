<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    //1. Property


    //2. Constructor


    //3. Methods
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('category1s')->insert([
            'cat_name' =>'Home and Applainces',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',
            'cat_name' =>'Kitens',  
        ]);

    }
}
