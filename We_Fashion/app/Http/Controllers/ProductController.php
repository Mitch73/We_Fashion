<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function showBook(Category $category){
        return view('categories.single', ['category' => $category]);

    }
}
