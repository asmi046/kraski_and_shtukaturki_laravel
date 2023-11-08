<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use App\Models\ColorEffect;

class ColorEffectController extends Controller
{
    public function index() {

        $all_effect = ColorEffect::all();
        return view('color-effect', ['all_effects' => $all_effect]);
    }
}
