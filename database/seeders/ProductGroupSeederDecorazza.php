<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductGroupSeederDecorazza extends Seeder
{
    /**
     * Run the database seeds.
     */

    public $cat_data = [
        "Декоративные краски" => 1,
        "Венецианская штукатурка" => 2,
        "Фактурные покрытия" => 3,
        "Лессирующие покрытия" => 4,
        "Интерьерные краски" => 5,
        "Фасадные краски" => 6,
        "Фасадные штукатурки" => 7,
        "Грунты" => 8,
        "Финишные покрытия" => 9,
        "Микроцемент" => 10,
        "Инструменты" => 11
    ];

    protected function get_named_array($array) {
        $rezarray = [];

        foreach ($array as $item) {
            $rezarray[] = ["Преимущество" => $item];
        }

        return $rezarray;
    }

    public function run(): void
    {

    $load_img = true;

     $ourData = file_get_contents(base_path() . "/public/base/tovars/tovar_goup_decorazza.json");
     $main_data = json_decode($ourData, true);

     $no_cat = 0;
     $i = 1;
     foreach ($main_data as $item) {
        // try {
            $full_img_name = basename($item["pack_foto"]);

            if ($load_img)
            if ($full_img_name)
                Storage::disk('public')->put($full_img_name, file_get_contents($item["pack_foto"]), 'public');

            $tovar_element = [
                "sku" => $item["sku"],
                "title" => $item["name"],
                "slug" => Str::slug($item["name"]."_".$item["sku"]),
                "img" => Storage::url($full_img_name),
                "description" => $item["description"],

                'popular' => rand(1,0),

                "tm" => "DECORAZZA",
                "advantages" => json_encode($this->get_named_array($item["advantages"])),
                "props" => json_encode([]),

                "short_description" => $item["short_description"],


                "seo_title" => $item["name"],
                "seo_description" => $item["name"]." - купить в Курске по выгодной цене. Гарантия качества."
            ];

            DB::table("product_groups")->insert($tovar_element);

            $t_id = DB::getPdo()->lastInsertId();

            printf("#%s\n\r", $i);
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
                $no_cat++;
            }


            $effect_arr = effect_get($item["name"]);

            foreach ($effect_arr as $e_el) {
                $ce_relation = [
                    'color_effect_id' => $e_el,
                    'product_group_id' => $t_id,
                ];

                DB::table("color_effect_product_group")->insert($ce_relation);
            }


            if (!empty($item["price_variant"])) {
                foreach ($item["price_variant"] as $el) {

                    $p_element = [
                        'product_group_id' => $t_id,
                        'ed_izm' => $el["amount"],
                        'volume' =>floatval(str_replace(",", ".", $el["volume"])),
                        'price' => floatval($el["price"]),
                        'old_price' => 0
                    ];

                    DB::table("product_group_prices")->insert($p_element);
                }
                print("Добавлены ценовые предложения\n\r");
            }



            if (!empty($item["full_galery"])) {
                print("Галерея --> \n\r");
                foreach ($item["full_galery"] as $vaue) {

                    $tex_img_name = basename($vaue);

                    if ($load_img)
                    if ($tex_img_name)
                        Storage::disk('public')->put($tex_img_name, file_get_contents($vaue), 'public');

                    $tx_element = [
                        "product_group_id" => $t_id,
                        "link" => Storage::url($tex_img_name),
                        "title" => $item["name"],
                        "alt" => $item["name"],
                    ];

                    DB::table("product_group_images")->insert($tx_element);
                }
                print("Галерея добавлена\n\r");
            }

            echo "\n\r------\n\r";
        // } catch (\Exception $e) {
        //     print("Errr: Товар не загружен! \n\r");
        // }

        $i++;
     }


     printf("Нет категорий у %s записей", $no_cat);

    }
}
