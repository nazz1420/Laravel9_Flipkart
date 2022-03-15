<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    //1. Property
    use HasFactory;

    //2. Constructor

    //3. method
    public function getCategory(){
        $data = [
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
            
        ];

        return $data;
    }
}
