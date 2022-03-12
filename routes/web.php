<?php

use App\Http\Controllers\Anil;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
    :: = Scope Resolution Operator   
    Object::Members
    Left::Rigth

    There are two types of members available
    1. Properties
    2. Method/Functions

    Route::get();
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anil', function () {
    $name = 'Anil Dollor';
    //Associative array [key=>value]
    return view('anil',["abc"=>$name]);
});

Route::get('/krishnapal', function () {
    $fullname = 'Krishnal Singh';
    return view('krishnapal',compact('fullname'));
});


Route::get('/sunil', function () {
    $fname = 'Sunil Dollor';
    return view('sunil')->with('yyy', $fname);
});


Route::get('profile', [Anil::class, 'display']);