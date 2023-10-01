<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Filters\ProductFilter;

class CategoryController extends Controller
{
    public function show(ProductFilter $request) {

        $product_product = Product::select()->filter($request)->paginate(15)->withQueryString();

        return view('catalog', ["products" => $product_product]);
    }

}
