<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main_data = [
            "San Marcoк",
            "DECORAZZA",
            "Pavan",
            "Olsta",
            "Lanors",
            "Bayramix",
            "ALURE",
        ];

        $i = 1;
        foreach ($main_data as $item) {

            $cat_elem = [
                "name" => $item,
                "title" => 'Торговая марка '.$item,
                "slug" => Str::slug($item),
                "description" => 'Торговая марка '.$item,
                "seo_title" => 'Торговая марка '.$item,
                "seo_description" => 'Торговая марка '.$item,
            ];

            var_dump($cat_elem);

            DB::table("brands")->insert($cat_elem);
            $i++;
        }
    }
}
