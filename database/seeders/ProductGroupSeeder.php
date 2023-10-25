<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public $cat_data = [
        "Декоративные краски" => 1,
        "Венецианские штукатурки" => 2,
        "Фактурные покрытия" => 3,
        "Лессирующие покрытия" => 4,
        "Интерьерные краски" => 5,
        "Фасадные краски" => 6,
        "Фасадные штукатурки" => 7,
        "Грунты" => 8,
        "Специальные покрытия" => 9,
        "Системы Микроцементо" => 10,
        "Инструменты" => 11
    ];



    public function run(): void
    {

    $load_img = false;

     $ourData = file_get_contents(base_path() . "/public/base/tovars/tovar_group_vernici.json");
     $main_data = json_decode($ourData, true);

     $i = 1;
     foreach ($main_data as $item) {
        try {
            $full_img_name = basename($item["pack_foto"]);

            if ($load_img)
                if ($full_img_name)
                    Storage::disk('public')->put($full_img_name, file_get_contents($item["pack_foto"]), 'public');


            $tovar_element = [
                'sku' => $item["sku"],
                'title' => $item["name"],
                'slug' => Str::slug($item["name"]."_".$item["sku"]),
                'img' => Storage::url($full_img_name),
                'description' => $item["description"],

                'popular' => rand(1,0),

                'advantages' => json_encode([]),
                'props' => json_encode($item["props"]),
                'short_description' => $item["short_description"],
                'tm' => "San Marco",

                'seo_title' => $item["category"]." ".$item["name"],
                'seo_description' => $item["category"]." ".$item["name"]." - купить в курске по выгодной цене. Гарантия качества."
            ];

            DB::table("product_groups")->insert($tovar_element);

            $t_id = DB::getPdo()->lastInsertId();

            printf("Добавлен товар: %s \n\r", $item["name"]);

            $cat_id = $this->cat_data[$item["category"]];

            if ($cat_id) {
                $cat_relation = [
                    'category_id' => $cat_id,
                    'product_group_id' => $t_id,
                ];

                DB::table("category_product_group")->insert($cat_relation);
                printf("Присвоенна категория: %s \n\r", $item["category"]);
            } else {
                print("Не найден ID в категориях\n\r");
                print("Категория: " . $item["category"] );
            }

            if (!empty($item["price_variant"])) {
                foreach ($item["price_variant"] as $item) {



                    $p_element = [
                        'product_group_id' => $t_id,
                        'ed_izm' => $item["ed"],
                        'volume' =>floatval(str_replace(",", ".", $item["value"])),
                        'price' => floatval($item["price"]),
                        'old_price' => 0
                    ];

                    DB::table("product_group_prices")->insert($p_element);
                }
                print("Добавлены ценовые предложения\n\r");
            }

            echo "\n\r------\n\r";
        } catch (Exception $e) {
            print("Errr: Товар не загружен!");
        }
        $i++;
     }

    }
}
