<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo 'category index';
        //dd(Category);
        $categories = Category::getCategory(); // latest() method is a elequent method
        
        //dd(gettype($categories));
        //dd($categories);
        //$data = $categories;
        return view('category.index',['dt'=>$categories]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       //echo 'create methods';
        return view('category.create');//foldername.filename
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        Category::storeCategory($request->all()); //Actual arguemtn
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function show(Category1 $category1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function edit(Category1 $category1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category1 $category1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category1  $category1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category1 $category1)
    {
        //
    }
}
