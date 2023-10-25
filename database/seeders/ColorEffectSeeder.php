<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ColorEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main_data = [
            "Муаровый шёлк" => "",
            "Велюр, Вельвет, матовый шёлк" => "",
            "Перламутровый шёлк" => "",
            "Искрящийся бархат" => "",
            "Кожа, замша" => "",
            "Песчаный перламутр" => "",
            "Песчаный матовый" => "",
            "Металлик" => "",
            "Бетон" => "",
            "Травертин" => "",
            "Шлифованный, глянцевый камень" => "",
            "Рустик, мазанка" => "",
            "Карта мира" => "",
            "Гротто, мароканка" => "",
        ];

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

            DB::table("color_effects")->insert($cat_elem);
            $i++;
        }
    }
}
