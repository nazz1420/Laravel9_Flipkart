<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Anil extends Controller
{
    //1. Property/Data

    //2. Constructor


    //3. Method/Fuctions
    public function show()
    {
        return view('xyz.profile', [
            'user' => '123456789'
        ]);
    }
    ////////
    public function display(){
        return view('xyz.profile', [
            'user' => 'abcdefghi'
        ]);
    }
}
