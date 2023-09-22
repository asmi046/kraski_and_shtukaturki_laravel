<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ourData = file_get_contents(base_path() . "/public/base/category_vernici.json");
        $main_data = json_decode($ourData, true);

        $i = 1;
        foreach ($main_data as $key => $item) {

            $cat_elem = [
                "parentid" => 0,
                "order" => $i,
                "name" => $key,
                "slug" => Str::slug($key),
                "description" => $key,
                "title_seo" => $key,
                "description_seo" => $key. "Купить по выгодной цене в Курске. Гарантия качества.",
            ];

            var_dump($cat_elem);

            DB::table("categories")->insert($cat_elem);
            $i++;
        }

    }
}
