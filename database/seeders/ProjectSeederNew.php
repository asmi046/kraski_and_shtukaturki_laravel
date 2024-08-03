<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectSeederNew extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("p1_1.jpg", file_get_contents(public_path('portfolio/project_1/p1_1.jpg')), 'public');
        Storage::disk('public')->put("p1_2.jpg", file_get_contents(public_path('portfolio/project_1/p1_2.jpg')), 'public');
        Storage::disk('public')->put("p1_3.jpg", file_get_contents(public_path('portfolio/project_1/p1_3.jpg')), 'public');
        Storage::disk('public')->put("p1_4.jpg", file_get_contents(public_path('portfolio/project_1/p1_4.jpg')), 'public');
        Storage::disk('public')->put("p1_5.jpg", file_get_contents(public_path('portfolio/project_1/p1_5.jpg')), 'public');
        Storage::disk('public')->put("p1_6.jpg", file_get_contents(public_path('portfolio/project_1/p1_6.jpg')), 'public');
        Storage::disk('public')->put("p1_7.jpg", file_get_contents(public_path('portfolio/project_1/p1_7.jpg')), 'public');

        Storage::disk('public')->put("p2_1.jpg", file_get_contents(public_path('portfolio/project_2/p2_1.jpg')), 'public');
        Storage::disk('public')->put("p2_2.jpg", file_get_contents(public_path('portfolio/project_2/p2_2.jpg')), 'public');
        Storage::disk('public')->put("p2_3.jpg", file_get_contents(public_path('portfolio/project_2/p2_3.jpg')), 'public');
        Storage::disk('public')->put("p2_4.jpg", file_get_contents(public_path('portfolio/project_2/p2_4.jpg')), 'public');

        Storage::disk('public')->put("p3_1.jpg", file_get_contents(public_path('portfolio/project_3/p3_1.jpg')), 'public');
        Storage::disk('public')->put("p3_2.jpg", file_get_contents(public_path('portfolio/project_3/p3_2.jpg')), 'public');

        Storage::disk('public')->put("p4_1.jpg", file_get_contents(public_path('portfolio/project_4/p4_1.jpg')), 'public');
        Storage::disk('public')->put("p4_2.jpg", file_get_contents(public_path('portfolio/project_4/p4_2.jpg')), 'public');

        Storage::disk('public')->put("p5_1.jpg", file_get_contents(public_path('portfolio/project_5/p5_1.jpg')), 'public');
        Storage::disk('public')->put("p5_2.jpg", file_get_contents(public_path('portfolio/project_5/p5_2.jpg')), 'public');
        Storage::disk('public')->put("p5_3.jpg", file_get_contents(public_path('portfolio/project_5/p5_3.jpg')), 'public');
        Storage::disk('public')->put("p5_4.jpg", file_get_contents(public_path('portfolio/project_5/p5_4.jpg')), 'public');

        Storage::disk('public')->put("p6_1.jpg", file_get_contents(public_path('portfolio/project_6/p6_1.jpg')), 'public');
        Storage::disk('public')->put("p6_2.jpg", file_get_contents(public_path('portfolio/project_6/p6_2.jpg')), 'public');
        Storage::disk('public')->put("p6_3.jpg", file_get_contents(public_path('portfolio/project_6/p6_3.jpg')), 'public');
        Storage::disk('public')->put("p6_4.jpg", file_get_contents(public_path('portfolio/project_6/p6_4.jpg')), 'public');

        $main_data = [
            [
                "title" => "Известковая декоративная штукатурка от San Marco - Интонакино Минерале",
                "description" => file_get_contents(base_path() . "/public/portfolio/project_1/desc.html"),
                "img" => Storage::url("p1_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p1_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_2.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_3.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_4.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_5.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_6.jpg"), 'title' => ''],
                    ['img' => Storage::url("p1_7.jpg"), 'title' => '']
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Москва'],
                    ['name' => 'Объект', 'value' => 'Квартира'],
                    ['name' => 'Материалы', 'value' => 'Известковая декоративная штукатурка от San Marco']
                ]),

                "seo_title" => "Известковая декоративная штукатурка от San Marco - Интонакино Минерале",
                "seo_description" => "",
            ],

            [
                "title" => 'Антика Кальче+ с Велатурой и патиной "Хамелеон"',
                "description" => file_get_contents(base_path() . "/public/portfolio/project_2/desc.html"),
                "img" => Storage::url("p2_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p2_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p2_2.jpg"), 'title' => ''],
                    ['img' => Storage::url("p2_3.jpg"), 'title' => ''],
                    ['img' => Storage::url("p2_4.jpg"), 'title' => ''],
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Москва'],
                    ['name' => 'Объект', 'value' => 'Квартира'],
                    ['name' => 'Материалы', 'value' => 'San Marco - Antica Calce']
                ]),

                "seo_title" => 'Проект:  Антика Кальче + с Велатурой и патиной "Хамелеон" (квартира в Москве)',
                "seo_description" => 'Проект:  Антика Кальче + с Велатурой и патиной "Хамелеон" (квартира в Москве)',
            ],

            [
                "title" => "Декоративное покрытие Оптима",
                "description" => file_get_contents(base_path() . "/public/portfolio/project_3/desc.html"),
                "img" => Storage::url("p3_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p3_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p3_2.jpg"), 'title' => ''],
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Курск'],
                    ['name' => 'Объект', 'value' => 'Дом'],
                    ['name' => 'Материалы', 'value' => 'Оптима']
                ]),

                "seo_title" => "Проект: Декоративное покрытие Оптима (дом в Курске)",
                "seo_description" => "Проект: Декоративное покрытие Оптима (дом в Курске)",
            ],

            [
                "title" => "Интонакино Минерале + Велатура",
                "description" => file_get_contents(base_path() . "/public/portfolio/project_4/desc.html"),
                "img" => Storage::url("p4_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p4_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p4_2.jpg"), 'title' => ''],
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Курск'],
                    ['name' => 'Объект', 'value' => 'Квартира'],
                    ['name' => 'Материалы', 'value' => 'San Marco - Intonachino Minerale']
                ]),

                "seo_title" => "Проект: Интонакино Минерале + Велатура (квартира в Курске)",
                "seo_description" => "Проект: Интонакино Минерале + Велатура (квартира в Курске)",
            ],

            [
                "title" => "Интонакино Минерале (San Marco) + Воск",
                "description" => file_get_contents(base_path() . "/public/portfolio/project_5/desc.html"),
                "img" => Storage::url("p5_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p5_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p5_2.jpg"), 'title' => ''],
                    ['img' => Storage::url("p5_3.jpg"), 'title' => ''],
                    ['img' => Storage::url("p5_4.jpg"), 'title' => ''],
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Курск'],
                    ['name' => 'Объект', 'value' => 'Частный дом'],
                    ['name' => 'Материалы', 'value' => 'San Marco - Intonachino Minerale']
                ]),

                "seo_title" => "Проект: Нанесение декоративного покрытия Интонакино Минерале (San Marco) + Воск",
                "seo_description" => "Проект: Нанесение декоративного покрытия Интонакино Минерале (San Marco) + Воск",
            ],

            [
                "title" => "Известковая венецианская штукатурка Марморино Классико + Феничи (San Marco)",
                "description" => file_get_contents(base_path() . "/public/portfolio/project_6/desc.html"),
                "img" => Storage::url("p6_1.jpg"),
                "galery" => json_encode([
                    ['img' => Storage::url("p6_1.jpg"), 'title' => ''],
                    ['img' => Storage::url("p6_2.jpg"), 'title' => ''],
                    ['img' => Storage::url("p6_3.jpg"), 'title' => ''],
                    ['img' => Storage::url("p6_4.jpg"), 'title' => ''],
                ]),

                "params" => json_encode([
                    ['name' => 'Город', 'value' => 'Курск'],
                    ['name' => 'Объект', 'value' => 'Квартира'],
                    ['name' => 'Материалы', 'value' => 'San Marco - Intonachino Minerale']
                ]),

                "seo_title" => "Проект: Известковая венецианская штукатурка Марморино Классико + Феничи (San Marco)",
                "seo_description" => "Проект: Известковая венецианская штукатурка Марморино Классико + Феничи (San Marco)",
            ],

        ];

        $i = 1;
        foreach ($main_data as $item) {

            DB::table("projects")->insert($item);
            $i++;
        }
    }
}
