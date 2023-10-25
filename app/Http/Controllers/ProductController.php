<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductGroup;

class ProductController extends Controller
{


    public function show($slug) {

        $prosuct = ProductGroup::with("tovar_prices")->where('slug', $slug)->first();

        if($prosuct == null) abort('404');

        $categories = $prosuct->category_tovars()->first();

        if ($prosuct->tm === "DECORAZZA") {
            $tovar_images = $prosuct->tovar_images;

            $all_colors = Product::where('series', $prosuct->series)->where("tm", "DECORAZZA")->get();
            return view('product-decorazza', ['product' => $prosuct, 'category'=> $categories, "galery"=>$tovar_images, "all_colors" =>$all_colors]);
        }

        return view('product', ['product' => $prosuct, 'category'=> $categories]);
    }
}
