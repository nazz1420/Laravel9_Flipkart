<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // :: = scope resolution operation
        // object::member

        // ->  member selection operator

        // object->member
        // [key=>value] associative array

        // Array containing Associative Array
        DB::table('categories')->insert([
            [
                'category_name'=>'Electronics',
                'category_desc'=>'Electronics Descritpion'
            ],
            [
                'category_name'=>'Home Appliances',
                'category_desc'=>'Home Appliances Descritpion'
            ],
            [
                'category_name'=>'Faishion',
                'category_desc'=>'Faishion Descritpion'
            ],
            
        ]);
    }
}
