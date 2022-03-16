<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    //1. Property
    use HasFactory;
    protected $fillable = [
        'category_name', 'category_desc'
    ];

    //2. Constructor

    //3. method
    public function getCategory(){
        $data = DB::table('categories')->get(); // All records
            //->select('name', 'email as user_email')
            

        /* $data = [
            [
                'category_name'=>'Electronics2',
                'category_desc'=>'Electronics Descritpion'
            ],
            [
                'category_name'=>'Home Appliances2',
                'category_desc'=>'Home Appliances Descritpion'
            ],
            [
                'category_name'=>'Faishion2',
                'category_desc'=>'Faishion Descritpion'
            ],
            
        ]; */

        return $data;
    }
}
