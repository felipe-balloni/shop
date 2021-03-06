<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $products = Product::all();

        return view('index', compact('categories', 'products'));

    }

}
