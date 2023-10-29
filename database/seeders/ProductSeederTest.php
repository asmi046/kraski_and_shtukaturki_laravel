<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductSeederTest extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        $load_img = false;

        $ourData = file_get_contents(base_path() . "/public/base/tovars/tovar_goup_decorazza.json");
        $main_data = json_decode($ourData, true);

        // $cats = [];

        // foreach ($main_data as $item) {
        //     $cats[$item["category"]] = $item["category"];
        // }

        var_dump($main_data[0]['full_galery']);
        return;
        var_dump($main_data->full_galery);
    }
}
