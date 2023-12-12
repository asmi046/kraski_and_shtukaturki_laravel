<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use App\Models\ColorEffect;

class ColorEffectController extends Controller
{
    public function effect_page($slug) {
        $effect = ColorEffect::where("slug", $slug)->first();

        $products = $effect->ce_tovars()->paginate(20);
        return view('color-effect-page', ['effect' => $effect, 'products' => $products]);
    }

    public function index() {
        $all_effect = ColorEffect::select()->orderBy('order')->get();
        return view('color-effect', ['all_effects' => $all_effect]);
    }
}
