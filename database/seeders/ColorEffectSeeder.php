<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use DB;

class ColorEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main_data = [
            "Муаровый шёлк" => "muar-sholk.webp",
            "Велюр, Вельвет, матовый шёлк" => "iskr-barhat.webp",
            "Перламутровый шёлк" => "perl-shok.webp",
            "Искрящийся бархат" => "velur.webp",
            "Кожа, замша" => "zamha.webp",
            "Песчаный перламутр" => "peshani-perla.webp",
            "Песчаный матовый" => "peshani-mat.webp",
            "Металлик" => "metamik.webp",
            "Бетон" => "beton.webp",
            "Травертин" => "travertin.webp",
            "Шлифованный, глянцевый камень" => "kamen-gl.webp",
            "Рустик, мазанка" => "rust.webp",
            "Карта мира" => "world.webp",
            "Гротто, мароканка" => "grotto.webp",
        ];

        $i = 1;
        foreach ($main_data as $key => $item) {

            Storage::disk('public')->put($item, file_get_contents(public_path('img/effect/'.$item)), 'public');

            $cat_elem = [
                "order" => $i,
                "name" => $key,
                "slug" => Str::slug($key),
                'img' => Storage::url($item),
                "description" => $key,
                "seo_title" => $key,
                "seo_description" => "Материал с визуальным эффектом".$key. "Купить по выгодной цене в Курске. Гарантия качества.",
            ];

            var_dump($cat_elem);

            DB::table("color_effects")->insert($cat_elem);
            $i++;
        }
    }
}
