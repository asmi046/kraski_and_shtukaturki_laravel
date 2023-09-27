<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{


    public function show() {

        $prosuct = Product::where('id', 1)->first();

        if($prosuct == null) abort('404');


        return view('product', ['product' => $prosuct]);
    }
}
