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

        $main_data = [
            [
                "title" => "Известковая декоративная штукатурка от San Marco - Интонакино Минерале (квартира в Москве)",
                "description" => "",
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

                "seo_title" => "Известковая декоративная штукатурка от San Marco - Интонакино Минерале (квартира в Москве)",
                "seo_description" => "",
            ],

            [
                "title" => 'Антика Кальче+ с Велатурой и патиной "Хамелеон" (квартира в Москве)',
                "description" => "",
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

                "seo_title" => 'Антика Кальче+ с Велатурой и патиной "Хамелеон" (квартира в Москве)',
                "seo_description" => "",
            ],

            [
                "title" => "Декоративное покрытие Оптима (дом в Курске)",
                "description" => "",
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

                "seo_title" => "Декоративное покрытие Оптима (дом в Курске)",
                "seo_description" => "",
            ],

            [
                "title" => "Интонакино Минерале + Велатура (квартира в Курске)",
                "description" => "",
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

                "seo_title" => "Интонакино Минерале + Велатура (квартира в Курске)",
                "seo_description" => "",
            ],

        ];

        $i = 1;
        foreach ($main_data as $item) {

            DB::table("projects")->insert($item);
            $i++;
        }
    }
}
