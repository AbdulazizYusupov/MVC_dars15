<?php

namespace App\Controllers;

class CategoryController
{
    public function index()
    {
        $models = Category::all();
        return view('index', 'Home', $models);
    }
    public function about()
    {
        return view('about', 'About sahifa');
    }
    public function contact()
    {
        return view('contact', 'Contact sahifa');
    }
}