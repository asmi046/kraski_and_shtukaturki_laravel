<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{


    public function show($slug) {

        $prosuct = Product::where('slug', $slug)->first();

        if($prosuct == null) abort('404');

        $categories = $prosuct->category_tovars()->first();

        return view('product', ['product' => $prosuct, 'category'=> $categories]);
    }
}
