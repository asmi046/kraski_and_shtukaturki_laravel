<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\Category;
use App\Models\ColorEffect;

class IndexController extends Controller
{
    public function show() {

        $sales_group_liders = ProductGroup::with("tovar_prices")->where('popular', 1)->inRandomOrder()->take(4)->get();

        // dd($sales_group_liders);

        $sales_liders = Product::select()->orderBy('sales_count')->take(4)->get();
        $sales = Product::where('old_price', '!=', 0)->take(4)->get();

        $effects = ColorEffect::inRandomOrder()->take(4)->get();
        return view('index', [
            'sales_liders' => $sales_group_liders,
            'sales' => $sales,
            'effects' => $effects
        ]);
    }
}
